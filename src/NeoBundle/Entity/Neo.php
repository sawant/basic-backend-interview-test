<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="NeoBundle\Repository\NeoRepository")
 * @ORM\Table(name="nasa_neo")
 */
class Neo
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=50, unique=true, nullable=false)
     */
    private $referenceId;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $speed;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default":false})
     */
    private $isHazardous;

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return float
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = floatval($speed);
    }

    /**
     * @return boolean
     */
    public function getIsHazardous()
    {
        return $this->isHazardous;
    }

    /**
     * @param boolean $isHazardous
     */
    public function setIsHazardous($isHazardous)
    {
        $this->isHazardous = $isHazardous;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = new \DateTime($date);
    }
}