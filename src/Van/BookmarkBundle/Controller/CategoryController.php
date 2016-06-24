<?php

namespace Van\BookmarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\BookmarkBundle\Entity\Bookmark;
use Van\BookmarkBundle\Entity\Category;
use Van\BookmarkBundle\Form\Type\BookmarkType;
use Van\BookmarkBundle\Form\Type\CategoryType;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Category successfully added.");

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

        $category = $em->getRepository("VanBookmarkBundle:Category")->find($id);

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Category successfully udated.");

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

        $category = $em->getRepository("VanBookmarkBundle:Category")->find($id);

        $em->remove($category);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Category successfully deleted.");

        return new RedirectResponse($this->generateUrl("van_bookmarks"));
    }
}
