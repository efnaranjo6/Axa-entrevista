<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
*/
class TipoDocumento {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_tipo_documento;
/**
* @ORM\Column(type="string")
*/
private $name_tipo_documento;

/**
 * Get the value of id_tipo_documento
 */
public function getIdTipoDocumento()
{
return $this->id_tipo_documento;
}

/**
 * Set the value of id_tipo_documento
 */
public function setIdTipoDocumento($id_tipo_documento): self
{
$this->id_tipo_documento = $id_tipo_documento;

return $this;
}

/**
 * Get the value of name_tipo_documento
 */
public function getNameTipoDocumento()
{
return $this->name_tipo_documento;
}

/**
 * Set the value of name_tipo_documento
 */
public function setNameTipoDocumento($name_tipo_documento): self
{
$this->name_tipo_documento = $name_tipo_documento;

return $this;
}
}
