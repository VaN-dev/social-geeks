<?php

namespace AppBundle\Controller\Community;

use AppBundle\Form\Type\Community\CommunitySearchType;
use AppBundle\Form\Type\Community\CommunityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Community\Community;
use AppBundle\Entity\Community\UserCommunity;

/**
 * Class CommunityController
 * @package AppBundle\Community\Controller
 */
class DefaultController extends Controller
{
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $community = new Community();
        $community
            ->setCreatedBy($this->getUser())
        ;
        $form = $this->createForm(CommunityType::class, $community);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($community);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Community successfully added.");

            return new RedirectResponse($this->generateUrl("app.user.profile"));
        }
        
        return $this->render("AppBundle:Community:create.html.twig", [
            "form" => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $community = $em->getRepository('AppBundle:Community\Community')->find($id);
        
        return $this->render("AppBundle:Community:show.html.twig", [
            "community" => $community,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $communities = null;

        $form = $this->createForm(CommunitySearchType::class, []);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();

                $communities = $em->getRepository('AppBundle:Community\Community')->search($data["pattern"]);
            } else {
                die('ko');
            }
        }

        return $this->render('AppBundle:Community:search.html.twig', [
            "form" => $form->createView(),
            "communities" => $communities,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function joinAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $community = $em->getRepository('AppBundle:Community\Community')->find($id);

        $userCommunity = new UserCommunity();
        $userCommunity
            ->setUser($this->getUser())
            ->setCommunity($community)
        ;

        $em->persist($userCommunity);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Community successfully joined.");

        return new RedirectResponse($this->generateUrl("app.user.profile"));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function leaveAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $userCommunity = $em->getRepository('AppBundle:Community\UserCommunity')->find($id);

        $em->remove($userCommunity);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Community successfully left.");

        return new RedirectResponse($this->generateUrl("app.user.profile"));
    }
}
