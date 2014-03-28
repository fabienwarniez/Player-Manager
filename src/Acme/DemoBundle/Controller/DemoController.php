<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/display-player/{playerId}", name="_display_player")
     * @Template()
     */
    public function displayPlayerAction($playerId)
    {
        $players = array(
            array(
                'id' => 1,
                'name' => 'Fabien Barthez'
            ),
            array(
                'id' => 2,
                'name' => 'Lilian Thuram'
            )
        );

        $playerObject = NULL;

        foreach ($players as $player)
        {
            if ($player['id'] == $playerId)
            {
                $playerObject = $player;
                break;
            }
        }

        if ($playerObject != NULL)
        {
            return array('player_name' => $playerObject['name']);
        }
        else
        {
            return array('player_name' => 'Not found');
        }
    }
}
