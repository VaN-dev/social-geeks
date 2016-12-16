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

        $stackoverflowConfig = $em->getRepository('AppBundle:ApiConfig\StackoverflowConfig')->findOneBy(['user' => $this->getUser(), 'status' => true]);
        $stackoverflow = null;
        if (null !== $stackoverflowConfig) {
            $client   = $this->get('guzzle.client.stackoverflow');
            $response = $client->get('/questions?pagesize=10&order=desc&sort=activity&tagged=symfony2&site=stackoverflow');
            $data = json_decode(htmlspecialchars_decode($response->getBody(), ENT_QUOTES));
            $data = json_decode($response->getBody());
            $stackoverflow['questions'] = $data->items;

            if (true === $stackoverflowConfig->getSelfQuestions() && null !== $stackoverflowConfig->getRemoteId()) {
                $response = $client->get('/users/'. $stackoverflowConfig->getRemoteId() .'/questions?pagesize=10&order=desc&sort=activity&site=stackoverflow');
                $data = json_decode($response->getBody());
                $stackoverflow['selfQuestions'] = $data->items;
            }
        }
        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
            "posts" => $posts,
            "form" => $form->createView(),
            "stackoverflow" => $stackoverflow,
        ]);
    }
}
