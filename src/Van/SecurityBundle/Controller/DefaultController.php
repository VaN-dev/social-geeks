<?php

namespace Van\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Van\SecurityBundle\Form\Type\ResetPasswordType;
use Van\SecurityBundle\Form\Type\RetrievePasswordType;
use Van\UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * Login form
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        if($error) {
            $request->getSession()->getFlashBag()->add('danger', $error->getMessageKey());
        }

        return $this->render("@VanSecurity/Default/login.html.twig", [
            "last_username" => $lastUsername,
        ]);
    }

    /**
     * Login check
     */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }

    /**
     * Demande de récupération du mot de passe
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function passwordRetrievalAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new RetrievePasswordType(), $user);

        if ("POST" == $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $user = $this->getDoctrine()->getManager()->getRepository("EvoUserBundle:User")->findOneBy(["username" => $user->getUsername()]);

                $passwordResetter = $this->container->get("evo_security.password_resetter");
                $response = $passwordResetter->resetPassword($user);

                if (true === $response["success"]) {
                    $request->getSession()->getFlashBag()->add("success", "Un e-mail de ré-initialisation de mot de passe a été envoyé à l'adresse " . $user->getUsername());
                } else {
                    $request->getSession()->getFlashBag()->add("danger", $response["error"]);
                }
            }
        }

        return $this->render("@VanSecurity/Default/password-retrieval.html.twig", [
            "form" => $form->createView(),
        ]);
    }

    /**
     * Reset password
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resetPasswordAction(Request $request)
    {
        $error = false;

        $user = $this->getDoctrine()->getManager()->getRepository("EvoUserBundle:User")->findOneBy(["username" => $request->query->get("mail"), "passwordToken" => $request->query->get("token")]);
        $form = $form = $this->createForm(new ResetPasswordType(), $user);

        if ("POST" == $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $existingUser = $this->getDoctrine()->getManager()->getRepository("EvoUserBundle:User")->findOneBy(["username" => $user->getUsername(), "passwordToken" => $user->getPasswordToken()]);

                $user = $existingUser->mergeWith($user);

                $encoder = $this->get('security.password_encoder');
                $hash = $encoder->encodePassword($user, $user->getPasswordPlain());

                // Mise à jour du mot de passe (hash) et suppression du token
                $user->setPassword($hash);
                $user->setPasswordToken(null);
                $this->getDoctrine()->getManager()->flush();

                $request->getSession()->getFlashBag()->add('success', 'Votre mot de passe à été modifié avec succès. Nous vous avons connecté à votre compte.');

                // Programatically authing the user
                $firewall = 'main';
                $unauthenticatedToken = new UsernamePasswordToken(
                    $user,
                    $user->getPassword(),
                    $firewall,
                    $user->getRoles()
                );
                $this->container->get('security.token_storage')->setToken($unauthenticatedToken);
                $event = new InteractiveLoginEvent($this->get("request"), $unauthenticatedToken);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
                $request->getSession()->set('_security_'.$firewall, serialize($unauthenticatedToken));
                $request->getSession()->save();

                return $this->redirect($this->generateUrl("homepage"));
            }
        } elseif ($request->query->has("mail") && $request->query->has("token")) {
            // Vérification que le user est celui concerné par le token et que le token n'est pas expiré
            if (null !== $user) {
                if ($user->getPasswordTokenExpiredAt() < new \DateTime()) {
                    $request->getSession()->getFlashBag()->add("danger", "Votre demande de mot de passe a expiré. <a href=\"" . $this->generateUrl("van_security_password_retrieval") . "\">Cliquez-ici</a> pour faire une nouvelle demande de mot de passe.");
                }
            } else {
                $error = true;
                $request->getSession()->getFlashBag()->add("danger", "Aucun utilisateur correspondant à cet e-mail et ce token.");
            }
        } else {
            $error = true;
            $request->getSession()->getFlashBag()->add("danger", "Certains paramètres sont manquants. Veuillez cliquer sur le lien présent dans le mail que vous avez reçu.");
        }

        return $this->render("VanSecurityBundle:Default:password-choose.html.twig", [
            "error" => $error,
            "form" => $form->createView(),
        ]);
    }
}
