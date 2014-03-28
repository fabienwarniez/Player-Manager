<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 2/27/2014
 * Time: 10:29 PM
 */

namespace Fabien\PlayerManagerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $logoFileName;

    /**
     * @ORM\ManyToOne(targetEntity="League")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $league;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    protected $players;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set league
     *
     * @param string $league
     * @return Team
     */
    public function setLeague($league)
    {
        $this->league = $league;

        return $this;
    }

    /**
     * Get league
     *
     * @return string 
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Add players
     *
     * @param \Fabien\PlayerManagerBundle\Entity\Player $players
     * @return Team
     */
    public function addPlayer(\Fabien\PlayerManagerBundle\Entity\Player $players)
    {
        $this->players[] = $players;

        return $this;
    }

    /**
     * Remove players
     *
     * @param \Fabien\PlayerManagerBundle\Entity\Player $players
     */
    public function removePlayer(\Fabien\PlayerManagerBundle\Entity\Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Team
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set logoFileName
     *
     * @param string $logoFileName
     * @return Team
     */
    public function setLogoFileName($logoFileName)
    {
        $this->logoFileName = $logoFileName;

        return $this;
    }

    /**
     * Get logoFileName
     *
     * @return string 
     */
    public function getLogoFileName()
    {
        return $this->logoFileName;
    }
}
