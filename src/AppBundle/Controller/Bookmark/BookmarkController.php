<?php

namespace AppBundle\Controller\Bookmark;

use AppBundle\Entity\Bookmark\Bookmark;
use AppBundle\Form\Type\Bookmark\BookmarkType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BookmarkController
 * @package AppBundle\Controller\Bookmark
 */
class BookmarkController extends Controller
{

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $bookmark = new Bookmark();
        $form = $this->createForm(BookmarkType::class, $bookmark, [
            'action' => $this->generateUrl('van_bookmarks_insert'),
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($bookmark);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Bookmark successfully added.");

            return new RedirectResponse($this->generateUrl("van_bookmarks"));
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $bookmark = $em->getRepository('AppBundle:Bookmark\Bookmark')->find($id);

        $form = $this->createForm(BookmarkType::class, $bookmark);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Bookmark successfully udated.");

            return new RedirectResponse($this->generateUrl("van_bookmarks"));
        }

        return $this->render('AppBundle:Bookmark/Default:update.html.twig', [
            "form" => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $bookmark = $em->getRepository('AppBundle:Bookmark\Bookmark')->find($id);

        $em->remove($bookmark);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Bookmark successfully deleted.");

        return new RedirectResponse($this->generateUrl("van_bookmarks"));
    }
}