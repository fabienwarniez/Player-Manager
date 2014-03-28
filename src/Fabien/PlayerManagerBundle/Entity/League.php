<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 3/24/2014
 * Time: 11:44 PM
 */

namespace Fabien\PlayerManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="league")
 */
class League
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
     * @ORM\OneToMany(targetEntity="Team", mappedBy="league")
     */
    protected $teams;

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
     * @return League
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
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return League
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
     * Add teams
     *
     * @param \Fabien\PlayerManagerBundle\Entity\Team $teams
     * @return League
     */
    public function addTeam(\Fabien\PlayerManagerBundle\Entity\Team $teams)
    {
        $this->teams[] = $teams;

        return $this;
    }

    /**
     * Remove teams
     *
     * @param \Fabien\PlayerManagerBundle\Entity\Team $teams
     */
    public function removeTeam(\Fabien\PlayerManagerBundle\Entity\Team $teams)
    {
        $this->teams->removeElement($teams);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Set logoFileName
     *
     * @param string $logoFileName
     * @return League
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
