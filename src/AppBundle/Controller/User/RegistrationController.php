<?php

namespace AppBundle\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use AppBundle\Entity\User\User;
use AppBundle\Form\Type\User\UserRegistrationType;

/**
 * Class RegistrationController
 * @package AppBundle\Controller\User
 */
class RegistrationController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserRegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoder = $this->get('app.security.password_encoder');
            $hash = $encoder->encodePassword($user->getPasswordPlain(), $user->getSalt());
            $user->setPassword($hash);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // Programatically authing the user
            $firewall = 'main';
            $unauthenticatedToken = new UsernamePasswordToken(
                $user,
                $user->getPassword(),
                $firewall,
                $user->getRoles()
            );

            $this->get('security.token_storage')->setToken($unauthenticatedToken);
            $event = new InteractiveLoginEvent($request, $unauthenticatedToken);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
            $request->getSession()->set('_security_'.$firewall, serialize($unauthenticatedToken));
            $request->getSession()->save();

            return $this->redirectToRoute('index');
        }

        return $this->render('AppBundle:User/Registration:index.html.twig', [
            "form" => $form->createView(),
        ]);
    }
}
