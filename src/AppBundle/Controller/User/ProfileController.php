<?php

namespace AppBundle\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $communities = $em->getRepository('AppBundle:Community\UserCommunity')->findBy(["user" => $this->getUser()]);

        return $this->render('AppBundle:User/Profile:index.html.twig', [
            "communities" => $communities,
        ]);
    }
}
