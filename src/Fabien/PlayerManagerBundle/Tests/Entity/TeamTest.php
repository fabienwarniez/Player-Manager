<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 3/24/2014
 * Time: 11:41 PM
 */

namespace Fabien\PlayerManagerBundle\Tests\Entity;

use Fabien\PlayerManagerBundle\Entity\Team;

class TeamTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $team = new Team();
        $team->setName("Vancouver Whitecaps");
        $team->setLeague("Major League Soccer");
    }
} 