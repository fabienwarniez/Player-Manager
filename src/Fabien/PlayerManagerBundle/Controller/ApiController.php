<?php

namespace Fabien\PlayerManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/get-player-profile/{id}")
     * @Template()
     */
    public function getPlayerProfileAction($id)
    {
        $player = $this->getDoctrine()
            ->getRepository('FabienPlayerManagerBundle:Player')
            ->find($id);

        $serializer = $this->container->get('serializer');
        $serializedPlayer = $serializer->serialize($player, 'json');
        return new Response($serializedPlayer);
    }
}
