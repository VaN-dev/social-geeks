<?php

namespace Van\FeedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\FeedBundle\Entity\Post;
use Van\FeedBundle\Event\PostEvent;
use Van\FeedBundle\Form\Type\PostType;
use Van\FeedBundle\VanFeedEvents;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post = new Post();
        $post->setUser($this->getUser());
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($post);

            $this->get('event_dispatcher')->dispatch(VanFeedEvents::PRE_POST_INSERTED, $event = new PostEvent($post));

            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Post successfully added.");

            return new RedirectResponse($this->generateUrl("index"));
        }
    }
}
