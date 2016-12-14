<?php

namespace AppBundle\Controller\Feed;

use AppBundle\Entity\Feed\Comment;
use AppBundle\Entity\Feed\Post;
use AppBundle\Form\Type\Feed\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CommentController
 * @package AppBundle\Controller\Feed
 */
class CommentController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $comment->setUser($this->getUser());
        $form = $this->buildCommentForm($comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($comment);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", "Comment successfully posted.");

            return new RedirectResponse($this->generateUrl("index"));
        }
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listFromPostAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Feed\Post')->find($request->query->get("id"));
        $comments = $this->fetchCommentsFromPost($post);

        $comment = new Comment();
        $comment->setPost($post);
        $comment->setPost($post);
        $form = $this->buildCommentForm($comment);

        return $this->render("AppBundle:Feed/Comment:list.html.twig", [
            "comments" => $comments,
            "form" => $form->createView(),
        ]);
    }

    /**
     * @param Post $post
     * @return array
     */
    private function fetchCommentsFromPost(Post $post)
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('AppBundle:Feed\Comment')->findBy(["post" => $post, "parent" => null]);

        return $comments;
    }

    /**
     * @param Comment $comment
     * @return \Symfony\Component\Form\Form
     */
    private function buildCommentForm(Comment $comment)
    {
        $form = $this->createForm(CommentType::class, $comment, [
            "action" => $this->generateUrl("app.feed.comment_save"),
        ]);

        return $form;
    }
}
