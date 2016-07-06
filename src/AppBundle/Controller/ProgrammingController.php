<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Van\FeedBundle\Entity\Post;
use Van\FeedBundle\Form\Type\PostType;

class ProgrammingController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {


        
        return $this->render('AppBundle:Programming:index.html.twig');
    }
}
