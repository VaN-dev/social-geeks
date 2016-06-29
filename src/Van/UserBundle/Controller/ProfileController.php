<?php

namespace Van\UserBundle\Controller;

use AppBundle\Entity\UserCommunity;
use AppBundle\Form\JoinCommunityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $userCommunity = new UserCommunity();
        $userCommunity
            ->setUser($this->getUser())
        ;

        $formJoinCommunity = $this->createForm(new JoinCommunityType(), $userCommunity);

        return $this->render('VanUserBundle:Profile:index.html.twig', [
            "formJoinCommunity" => $formJoinCommunity->createView(),
        ]);
    }
}
