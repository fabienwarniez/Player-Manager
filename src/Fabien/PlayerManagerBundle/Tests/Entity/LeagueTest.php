<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 3/24/2014
 * Time: 11:41 PM
 */

namespace Fabien\PlayerManagerBundle\Tests\Entity;

use Fabien\PlayerManagerBundle\Entity\League;

class LeagueTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $league = new League();
        $league->setName("Major League Soccer");

        $em = $this->getDoctrine()->getManager();
        $em->persist($league);
        $em->flush();

        $this->assertNotNull($league->getId());
        $this->assertNotEquals(0, $league->getId());
    }
} 