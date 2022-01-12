<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
*/
class Factura {
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_factura;
    /**
    * @ORM\Column(type="string")
    */
    private $valor_factura;
    /**
    * @ORM\Column(type="date")
    */
    private $vencimineto_factura;
    /**
    * @ORM\Column(type="string")
    */
    private $vigencia_factura;
    /**
    * Unidirectional - Many-To-One
    *
    * @ManyToOne(targetEntity="Persona")
    * @JoinColumn(name="id_factura_persona", referencedColumnName="id_persona")
    */
    private $Persona;
    /**
     * Get the value of id_factura
     */
    public function getIdFactura()
    {
        return $this->id_factura;
    }

    /**
     * Set the value of id_factura
     */
    public function setIdFactura($id_factura): self
    {
        $this->id_factura = $id_factura;

        return $this;
    }
    /**
     * Get the value of valor_factura
     */
    public function getValorFactura()
    {
        return $this->valor_factura;
    }
    /**
     * Set the value of valor_factura
     */
    public function setValorFactura($valor_factura): self
    {
        $this->valor_factura = $valor_factura;

        return $this;
    }
    /**
     * Get the value of vencimineto_factura
     */
    public function getVenciminetoFactura()
    {
        return $this->vencimineto_factura;
    }
    /**
     * Set the value of vencimineto_factura
     */
    public function setVenciminetoFactura($vencimineto_factura): self
    {
        $this->vencimineto_factura = $vencimineto_factura;

        return $this;
    }
    /**
     * Get the value of vigencia_factura
     */
    public function getVigenciaFactura()
    {
        return $this->vigencia_factura;
    }
    /**
     * Set the value of vigencia_factura
     */
    public function setVigenciaFactura($vigencia_factura): self
    {
        $this->vigencia_factura = $vigencia_factura;

        return $this;
    }

    /**
     * Get the value of Persona
     */
    public function getPersona()
    {
        return $this->Persona;
    }

    /**
     * Set the value of Persona
     */
    public function setPersona($Persona): self
    {
        $this->Persona = $Persona;

        return $this;
    }
}