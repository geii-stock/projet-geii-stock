<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity
 */
class Statut
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="type_statut", type="string", length=60, nullable=false)
     */
    private $typeStatut;



    /**
     * Get idStatut
     *
     * @return integer 
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * Set typeStatut
     *
     * @param string $typeStatut
     * @return Statut
     */
    public function setTypeStatut($typeStatut)
    {
        $this->typeStatut = $typeStatut;

        return $this;
    }

    /**
     * Get typeStatut
     *
     * @return string 
     */
    public function getTypeStatut()
    {
        return $this->typeStatut;
    }
}
