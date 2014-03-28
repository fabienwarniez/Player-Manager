<?php

namespace Fabien\PlayerManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/league")
 */
class LeagueController extends Controller
{
    /**
     * @Route("/{slug}")
     * @Template()
     */
    public function indexAction($slug)
    {
        $league = $this->getDoctrine()
            ->getRepository('FabienPlayerManagerBundle:League')
            ->findOneBy(array('slug' => $slug));

        return array('league' => $league);
    }
}
