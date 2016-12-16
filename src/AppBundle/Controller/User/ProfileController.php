<?php

namespace AppBundle\Controller\User;

use AppBundle\Entity\ApiConfig\StackoverflowConfig;
use AppBundle\Form\Type\ApiConfig\StackoverflowConfigType;
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

        /**
         * StackoverflowConfig
         */
        $stackoverflowConfig = $em->getRepository('AppBundle:ApiConfig\StackoverflowConfig')->findOneBy(['user' => $this->getUser()]);
        if (null === $stackoverflowConfig) {
            $stackoverflowConfig = new StackoverflowConfig();
            $stackoverflowConfig->setUser($this->getUser());
        }

        $formStackoverflowConfig = $this->createForm(StackoverflowConfigType::class, $stackoverflowConfig, [
            'action' => $this->generateUrl('app.api_config.save'),
        ]);


        /**
         * data
         */
        $communities = $em->getRepository('AppBundle:Community\UserCommunity')->findBy(["user" => $this->getUser()]);

        return $this->render('AppBundle:User/Profile:index.html.twig', [
            "communities" => $communities,
            'formStackoverflowConfig' => $formStackoverflowConfig->createView(),
        ]);
    }
}
