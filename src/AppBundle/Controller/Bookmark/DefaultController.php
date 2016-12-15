<?php

namespace AppBundle\Controller\Bookmark;

use AppBundle\Entity\Bookmark\Bookmark;
use AppBundle\Entity\Bookmark\Category;
use AppBundle\Form\Type\Bookmark\BookmarkType;
use AppBundle\Form\Type\Bookmark\CategoryType;
use AppBundle\Form\Type\Bookmark\ImportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package AppBundle\Controller\Bookmark
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bookmarks = $em->getRepository('AppBundle:Bookmark\Bookmark')->findAll();

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
        $categories = $em->getRepository('AppBundle:Bookmark\Category')->findBy(["parent" => null]);

        // building an array tree
        $treeBuilder = $this->get("app.tree_builder.default");
        $tree = $treeBuilder->build($categories);

        // rendering view
        return $this->render('AppBundle:Bookmark/Default:index.html.twig', [
            "bookmarks" => $bookmarks,
            "formBookmark" => $formBookmark->createView(),
            "formCategory" => $formCategory->createView(),
            "formImport" => $formImport->createView(),
            "tree" => $tree,
        ]);
    }
}
