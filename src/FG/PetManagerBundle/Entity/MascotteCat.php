<?php

namespace FG\PetManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MascotteCat
 *
 * @ORM\Table(name="mascotte_type")
 * @ORM\Entity(repositoryClass="FG\PetManagerBundle\Repository\MascotteCatRepository")
 * @ORM\Entity(repositoryClass="FG\PetManagerBundle\Repository\CategorieRepository")
 */
class MascotteCat
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     *
     * @return MascotteCat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Set mascottes
     *
     * @param \FG\PetmanagerBundle\Entity\Mascotte $mascottes
     *
     * @return MascotteCat
     */
    public function setMascottes(\FG\PetmanagerBundle\Entity\Mascotte $mascottes)
    {
        $this->mascottes = $mascottes;

        return $this;
    }

    /**
     * Get mascottes
     *
     * @return \FG\PetmanagerBundle\Entity\Mascotte
     */
    public function getMascottes()
    {
        return $this->mascottes;
    }

    public function getDisplayIdCat()
    {
        return $this->id.'-'.$this->type;
    }
}
