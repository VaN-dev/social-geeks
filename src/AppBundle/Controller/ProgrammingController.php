<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProgrammingController
 * @package AppBundle\Controller
 */
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
