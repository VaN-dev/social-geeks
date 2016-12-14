<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Feed\Post;
use AppBundle\Form\Type\Feed\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        $posts = $em->getRepository('AppBundle:Feed\Post')->findBy([], ["createdAt" => "DESC"]);

        $post = new Post();
        $post->setUser($this->getUser());
        $form = $this->createForm(PostType::class, $post, [
            "action" => $this->generateUrl("app.feed.post_save"),
        ]);

        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
            "posts" => $posts,
            "form" => $form->createView(),
        ]);
    }
}
