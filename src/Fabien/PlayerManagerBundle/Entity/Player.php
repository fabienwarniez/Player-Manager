<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 2/27/2014
 * Time: 10:29 PM
 */

namespace Fabien\PlayerManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64, name="first_name", nullable=true)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=64, name="last_name", nullable=false)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $number;

    /**
     * @ORM\Column(type="boolean", name="designated_player", nullable=true)
     */
    protected $designatedPlayer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pictureFileName;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="players")
     */
    protected $team;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Player
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Player
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Player
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set designatedPlayer
     *
     * @param boolean $designatedPlayer
     * @return Player
     */
    public function setDesignatedPlayer($designatedPlayer)
    {
        $this->designatedPlayer = $designatedPlayer;

        return $this;
    }

    /**
     * Get designatedPlayer
     *
     * @return boolean 
     */
    public function getDesignatedPlayer()
    {
        return $this->designatedPlayer;
    }

    /**
     * Set team
     *
     * @param \Fabien\PlayerManagerBundle\Entity\Team $team
     * @return Player
     */
    public function setTeam(\Fabien\PlayerManagerBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Fabien\PlayerManagerBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    public function getName()
    {
        if ($this->firstName)
        {
            return $this->firstName . ' ' . $this->lastName;
        }
        else
        {
            return $this->lastName;
        }
    }

    /**
     * Set pictureFileName
     *
     * @param string $pictureFileName
     * @return Player
     */
    public function setPictureFileName($pictureFileName)
    {
        $this->pictureFileName = $pictureFileName;

        return $this;
    }

    /**
     * Get pictureFileName
     *
     * @return string 
     */
    public function getPictureFileName()
    {
        return $this->pictureFileName;
    }
}
