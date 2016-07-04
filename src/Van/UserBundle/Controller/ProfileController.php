<?php

namespace Van\UserBundle\Controller;

use AppBundle\Entity\UserCommunity;
use AppBundle\Form\JoinCommunityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $userCommunity = new UserCommunity();
        $userCommunity
            ->setUser($this->getUser())
        ;

        $formJoinCommunity = $this->createForm(new JoinCommunityType(), $userCommunity);

        $formJoinCommunity->handleRequest($request);

        if ($formJoinCommunity->isSubmitted() && $formJoinCommunity->isValid()) {
            die('ko');
            $em->persist($userCommunity);
            
            echo '<pre>';
            \Doctrine\Common\Util\Debug::dump($userCommunity);
            echo '</pre>';
            die();
            
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Bookmark successfully added.");

            return new RedirectResponse($this->generateUrl("van_bookmarks"));
        } else {
            die('ko');
        }

        return $this->render('VanUserBundle:Profile:index.html.twig', [
            "formJoinCommunity" => $formJoinCommunity->createView(),
        ]);
    }
}
