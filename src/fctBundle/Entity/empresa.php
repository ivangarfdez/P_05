<?php

namespace fctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="fctBundle\Repository\empresaRepository")
 */
class empresa
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono1", type="integer")
     */
    private $telefono1;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono2", type="integer")
     */
    private $telefono2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     *@ORM\OneToMany(targetEntity="alumno", mappedBy="empresa")
     */
    private $alumno;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return empresa
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono1
     *
     * @param integer $telefono1
     *
     * @return empresa
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return int
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param integer $telefono2
     *
     * @return empresa
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return int
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return empresa
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumno = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumno
     *
     * @param \fctBundle\Entity\alumno $alumno
     *
     * @return empresa
     */
    public function addAlumno(\fctBundle\Entity\alumno $alumno)
    {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \fctBundle\Entity\alumno $alumno
     */
    public function removeAlumno(\fctBundle\Entity\alumno $alumno)
    {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Get alumno
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
