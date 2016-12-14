<?php

namespace AppBundle\Controller\Feed;

use AppBundle\AppEvents;
use AppBundle\Entity\Feed\Post;
use AppBundle\Entity\Feed\PostLike;
use AppBundle\Event\Feed\PostEvent;
use AppBundle\Form\Type\Feed\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PostController
 * @package AppBundle\Controller\Feed
 */
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

            $this->get('event_dispatcher')->dispatch(AppEvents::PRE_POST_INSERTED, $event = new PostEvent($post));

            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Post successfully added.");

            return new RedirectResponse($this->generateUrl("index"));
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function likeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('AppBundle:Feed\Post')->find($id);

        $unique = $em->getRepository('AppBundle:Feed\PostLike')->findOneBy(["user" => $this->getUser(), "post" => $post]);

        if (null === $unique) {
            $post->setLikes($post->getLikes() + 1);

            $postLike = new PostLike();
            $postLike
                ->setUser($this->getUser())
                ->setPost($post)
            ;

            $em->persist($postLike);
            $em->flush();
        }

        return new RedirectResponse($this->generateUrl("index"));
    }
}
