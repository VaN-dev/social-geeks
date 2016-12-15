<?php

namespace AppBundle\Controller\Bookmark;

use AppBundle\Entity\Bookmark\Category;
use AppBundle\Form\Type\Bookmark\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CategoryController
 * @package AppBundle\Controller\Bookmark
 */
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

            return new RedirectResponse($this->generateUrl('app.bookmarks'));
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AppBundle:Bookmark\Category')->find($id);

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Category successfully udated.");

            return new RedirectResponse($this->generateUrl('app.bookmarks'));
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

        $category = $em->getRepository('AppBundle:Bookmark\Category')->find($id);

        $em->remove($category);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", "Category successfully deleted.");

        return new RedirectResponse($this->generateUrl('app.bookmarks'));
    }
}
