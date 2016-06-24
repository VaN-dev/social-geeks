<?php

namespace Van\BookmarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\BookmarkBundle\Entity\Bookmark;
use Van\BookmarkBundle\Entity\Category;
use Van\BookmarkBundle\Form\Type\BookmarkType;
use Van\BookmarkBundle\Form\Type\CategoryType;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bookmarks = $em->getRepository("VanBookmarkBundle:Bookmark")->findAll();

        $bookmark = new Bookmark();
        $formBookmark = $this->createForm(BookmarkType::class, $bookmark, [
            'action' => $this->generateUrl('van_bookmarks_insert'),
        ]);

        $category = new Category();
        $formCategory = $this->createForm(CategoryType::class, $category, [
            'action' => $this->generateUrl('van_bookmarks_category_insert'),
        ]);

        return $this->render('VanBookmarkBundle:Default:index.html.twig', [
            "bookmarks" => $bookmarks,
            "formBookmark" => $formBookmark->createView(),
            "formCategory" => $formCategory->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $bookmark = new Bookmark();
        $bookmark
            ->setUser($this->getUser())
        ;

        $form = $this->createForm(BookmarkType::class, $bookmark);

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

        $bookmark = $em->getRepository("VanBookmarkBundle:Bookmark")->find($id);

        $form = $this->createForm(BookmarkType::class, $bookmark);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Bookmark successfully udated.");

            return new RedirectResponse($this->generateUrl("van_bookmarks"));
        }

        return $this->render('VanBookmarkBundle:Default:update.html.twig', [
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

        $bookmark = $em->getRepository("VanBookmarkBundle:Bookmark")->find($id);

        $em->remove($bookmark);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Bookmark successfully deleted.");

        return new RedirectResponse($this->generateUrl("van_bookmarks"));
    }
}
