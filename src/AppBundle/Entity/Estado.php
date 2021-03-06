<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=64, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    function getDescripcion() {
      return $this->descripcion;
    }

    function getId() {
      return $this->id;
    }

    function setDescripcion($descripcion) {
      $this->descripcion = $descripcion;
      return $this;
    }

    function setId($id) {
      $this->id = $id;
      return $this;
    }


}

