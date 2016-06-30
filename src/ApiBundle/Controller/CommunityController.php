<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CommunityController
 * @package ApiBundle\Controller
 */
class CommunityController extends Controller
{
    /**
     * @return Response
     */
    public function getCommunitiesAction()
    {
        $data = [
            "items" => $this->getDoctrine()->getManager()->getRepository("AppBundle:Community")->findAll(),
        ];

        $serializer = $this->container->get("jms_serializer");
        $json = $serializer->serialize($data, "json");

        return new Response($json);
    }
}
