<?php

namespace Fabien\PlayerManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/player")
 */
class PlayerController extends Controller
{
    /**
     * @Route("/{id}")
     * @Template()
     */
    public function indexAction($id)
    {
        $player = $this->getDoctrine()
            ->getRepository('FabienPlayerManagerBundle:Player')
            ->find($id);

        return array('player' => $player);
    }
}
