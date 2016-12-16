<?php

namespace AppBundle\Controller\ApiConfig;

use AppBundle\Entity\ApiConfig\StackoverflowConfig;
use AppBundle\Form\Type\ApiConfig\StackoverflowConfigType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class StackoverflowConfigController
 * @package AppBundle\Controller\ApiConfig
 */
class StackoverflowConfigController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $stackoverflowConfig = $em->getRepository('AppBundle:ApiConfig\StackoverflowConfig')->findOneBy(['user' => $this->getUser()]);
        if (null === $stackoverflowConfig) {
            $stackoverflowConfig = new StackoverflowConfig();
            $stackoverflowConfig->setUser($this->getUser());
        }

        $form = $this->createForm(StackoverflowConfigType::class, $stackoverflowConfig);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($stackoverflowConfig);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Stackoverlow configuration saved.');
        }

        return new RedirectResponse($this->generateUrl('app.user.profile'));
    }
}
