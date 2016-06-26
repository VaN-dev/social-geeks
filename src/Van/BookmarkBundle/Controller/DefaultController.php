<?php

namespace Van\BookmarkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\BookmarkBundle\Entity\Bookmark;
use Van\BookmarkBundle\Entity\Category;
use Van\BookmarkBundle\Form\Type\BookmarkType;
use Van\BookmarkBundle\Form\Type\CategoryType;
use Van\BookmarkBundle\Form\Type\ImportType;

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

        // bookmark form
        $bookmark = new Bookmark();
        $formBookmark = $this->createForm(BookmarkType::class, $bookmark, [
            'action' => $this->generateUrl('van_bookmarks_insert'),
        ]);

        // category form
        $category = new Category();
        $formCategory = $this->createForm(CategoryType::class, $category, [
            'action' => $this->generateUrl('van_bookmarks_category_insert'),
        ]);

        // import form
        $formImport = $this->createForm(ImportType::class, [], [
            'action' => $this->generateUrl('van_bookmarks_import'),
        ]);

        // fetching categories, their children categories and their bookmarks
        $categories = $em->getRepository("VanBookmarkBundle:Category")->findBy(["parent" => null]);

        // building an array tree
        $treeBuilder = $this->container->get("van_bookmark.tree_builder.default");
        $tree = $treeBuilder->build($categories);

        // rendering view
        return $this->render('VanBookmarkBundle:Default:index.html.twig', [
            "bookmarks" => $bookmarks,
            "formBookmark" => $formBookmark->createView(),
            "formCategory" => $formCategory->createView(),
            "formImport" => $formImport->createView(),
            "tree" => $tree,
        ]);
    }
}
