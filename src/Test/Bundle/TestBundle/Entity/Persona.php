<?php
namespace Test\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
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
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=50)
     */
    private $documento;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Telefono",mappedBy="persona", cascade={"all"})
     */
     private $telefonos;

     /**
      * @var integer
      *
      * @ORM\ManyToOne(targetEntity="TipoDocumento")
      * @ORM\JoinColumn(name="tipo_documento_id", referencedColumnName="id")
      */
     private $tipoDocumento;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
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
     * Set apellido
     *
     * @param string $apellido
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Persona
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add telefonos
     *
     * @param \Ipap\Ejemplo\AsistenciaBundle\Entity\Telefono $telefonos
     * @return Persona
     */
    public function addTelefono(\Ipap\Ejemplo\AsistenciaBundle\Entity\Telefono $telefonos)
    {
        $this->telefonos[] = $telefonos;

        return $this;
    }

    /**
     * Remove telefonos
     *
     * @param \Ipap\Ejemplo\AsistenciaBundle\Entity\Telefono $telefonos
     */
    public function removeTelefono(\Ipap\Ejemplo\AsistenciaBundle\Entity\Telefono $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set tipoDocumento
     *
     * @param \Ipap\Ejemplo\AsistenciaBundle\Entity\TipoDocumento $tipoDocumento
     * @return Persona
     */
    public function setTipoDocumento(\Ipap\Ejemplo\AsistenciaBundle\Entity\TipoDocumento $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \Ipap\Ejemplo\AsistenciaBundle\Entity\TipoDocumento
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
}
