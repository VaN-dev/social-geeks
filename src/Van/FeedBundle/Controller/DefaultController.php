<?php

namespace Van\FeedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VanFeedBundle:Default:index.html.twig');
    }
}
