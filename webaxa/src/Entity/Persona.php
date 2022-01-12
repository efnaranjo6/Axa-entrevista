<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
*/
class Persona {
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_persona;
    /**
    * @ORM\Column(type="string")
    */
    private $name_persona;
    /**
    * @ORM\Column(type="string")
    */
    private $lastname_persona;
    /**
    * @ORM\Column(type="string")
    */
    private $codeid_persona;
    /**
    * Unidirectional - Many-To-One
    *
    * @ManyToOne(targetEntity="TipoDocumento")
    * @JoinColumn(name="id_persona_documento", referencedColumnName="id_tipo_documento")
    */
    private $TipoDocumento;
    /**
     * Get the value of id_persona
     */
    public function getIdPersona()
    {
        return $this->id_persona;
    }
    /**
     * Set the value of id_persona
     */
    public function setIdPersona($id_persona): self
    {
        $this->id_persona = $id_persona;

        return $this;
    }
    /**
     * Get the value of name_persona
     */
    public function getNamePersona()
    {
        return $this->name_persona;
    }

    /**
     * Set the value of name_persona
     */
    public function setNamePersona($name_persona): self
    {
        $this->name_persona = $name_persona;

        return $this;
    }

    /**
     * Get the value of lastname_persona
     */
    public function getLastnamePersona()
    {
        return $this->lastname_persona;
    }

    /**
     * Set the value of lastname_persona
     */
    public function setLastnamePersona($lastname_persona): self
    {
        $this->lastname_persona = $lastname_persona;

        return $this;
    }

    /**
     * Get the value of codeid_persona
     */
    public function getCodeidPersona()
    {
        return $this->codeid_persona;
    }

    /**
     * Set the value of codeid_persona
     */
    public function setCodeidPersona($codeid_persona): self
    {
        $this->codeid_persona = $codeid_persona;

        return $this;
    }

    /**
     * Get the value of TipoDocumento
     */
    public function getTipoDocumento()
    {
        return $this->TipoDocumento;
    }

    /**
     * Set the value of TipoDocumento
     */
    public function setTipoDocumento($TipoDocumento): self
    {
        $this->TipoDocumento = $TipoDocumento;

        return $this;
    }
}
