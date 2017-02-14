<?php

namespace FG\PetManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FG\PetManagerBundle\Entity\MascotteCat;
/**
 * Mascotte
 *
 * @ORM\Table(name="mascotte")
 * @ORM\Entity(repositoryClass="FG\PetManagerBundle\Repository\MascotteRepository")
 */
class Mascotte
{
    /**
    * @ORM\ManyToOne(targetEntity="MascotteCat")
    * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
    */
    private $mascotteCat;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")   
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
 
    /**
    * @var boolean
    *
    * @ORM\Column(name="capturable", type="boolean")
    */
    private $capturable;

    /**
     * @var string
     *
     * @ORM\Column(name="basename", type="string", length=255, unique=true)
     */
    private $baseName;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer")
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="speed", type="integer")
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(name="vie", type="integer")
     */
    private $vie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set baseName
     *
     * @param string $baseName
     *
     * @return Mascotte
     */
    public function setBaseName($baseName)
    {
        $this->baseName = $baseName;

        return $this;
    }

    /**
     * Get baseName
     *
     * @return string
     */
    public function getBaseName()
    {
        return $this->baseName;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return Mascotte
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return int
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return Mascotte
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set vie
     *
     * @param integer $vie
     *
     * @return Mascotte
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get vie
     *
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set capturable
     *
     * @param boolean $capturable
     *
     * @return Mascotte
     */
    public function setCapturable($capturable)
    {
        $this->capturable = $capturable;

        return $this;
    }

    /**
     * Get capturable
     *
     * @return boolean
     */
    public function getCapturable()
    {
        return $this->capturable;
    }


    /**
     * Set mascotteCat
     *
     * @param \FG\PetManagerBundle\Entity\MascotteCat $mascotteCat
     *
     * @return Mascotte
     */
    public function setMascotteCat(\FG\PetManagerBundle\Entity\MascotteCat $mascotteCat = null)
    {
        $this->mascotteCat = $mascotteCat;

        return $this;
    }

    /**
     * Get mascotteCat
     *
     * @return \FG\PetManagerBundle\Entity\MascotteCat
     */
    public function getMascotteCat()
    {
        return $this->mascotteCat;
    }
}
