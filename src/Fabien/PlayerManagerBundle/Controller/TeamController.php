<?php

namespace Fabien\PlayerManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/team")
 */
class TeamController extends Controller
{
    /**
     * @Route("/{slug}")
     * @Template()
     */
    public function indexAction($slug)
    {
        $team = $this->getDoctrine()
            ->getRepository('FabienPlayerManagerBundle:Team')
            ->findOneBy(array('slug' => $slug));

        return array('team' => $team);
    }
}
