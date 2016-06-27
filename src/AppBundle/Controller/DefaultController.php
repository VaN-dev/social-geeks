<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\FeedBundle\Entity\Post;
use Van\FeedBundle\Form\Type\PostType;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // fetch posts
        $posts = $em->getRepository("VanFeedBundle:Post")->findBy([], ["createdAt" => "DESC"]);

        $post = new Post();
        $post->setUser($this->getUser());
        $form = $this->createForm(PostType::class, $post, [
            "action" => $this->generateUrl("van_feed_post_save"),
        ]);

        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
            "posts" => $posts,
            "form" => $form->createView(),
        ]);
    }
}
