<?php

namespace Van\FeedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\FeedBundle\Entity\Comment;
use Van\FeedBundle\Entity\Post;
use Van\FeedBundle\Form\Type\CommentType;

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
        $post = $em->getRepository("VanFeedBundle:Post")->find($request->query->get("id"));
        $comments = $this->fetchCommentsFromPost($post);

        $comment = new Comment();
        $comment->setPost($post);
        $form = $this->buildCommentForm($comment);

        return $this->render("VanFeedBundle:Comment:list.html.twig", [
            "comments" => $comments,
            "form" => $form->createView(),
        ]);
    }

    /**
     * @param Post $post
     * @return array|\Van\FeedBundle\Entity\Comment[]
     */
    private function fetchCommentsFromPost(Post $post)
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository("VanFeedBundle:Comment")->findBy(["post" => $post, "parent" => null]);

        return $comments;
    }

    /**
     * @param Comment $comment
     * @return \Symfony\Component\Form\Form
     */
    private function buildCommentForm(Comment $comment)
    {
        $form = $this->createForm(CommentType::class, $comment, [
            "action" => $this->generateUrl("van_feed_comment_save"),
        ]);

        return $form;
    }
}
