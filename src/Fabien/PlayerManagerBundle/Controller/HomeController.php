<?php

namespace Fabien\PlayerManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $leagues = $this->getDoctrine()
            ->getRepository('FabienPlayerManagerBundle:League')
            ->findBy(array(), array('name' => 'asc'));

        return array('leagues' => $leagues);
    }
}
