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

        $links = [
            [
                "id" => 1, 
                "type" => "category", 
                "name" => "Category 1",
                "children" => [
                    [
                        "id" => 1,
                        "type" => "bookmark",
                        "name" => "Bookmark 1",
                        "url" => "http://www.google.com",
                    ],
                    [
                        "id" => 3,
                        "type" => "category",
                        "name" => "Category 3",
                        "children" => [
                            [
                                "id" => 2,
                                "type" => "bookmark",
                                "name" => "Bookmark 2",
                                "url" => "http://www.yahoo.com",
                            ],
                        ],
                    ],

                ]
            ],
            ["id" => 2, "type" => "category", "name" => "Category 2"],
        ];

        return $this->render('VanBookmarkBundle:Default:index.html.twig', [
            "bookmarks" => $bookmarks,
            "formBookmark" => $formBookmark->createView(),
            "formCategory" => $formCategory->createView(),
            "links" => $links,
        ]);
    }
}
