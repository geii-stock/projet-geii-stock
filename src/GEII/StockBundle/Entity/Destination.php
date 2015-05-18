<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destination", uniqueConstraints={@ORM\UniqueConstraint(name="type_destination", columns={"nom"})}, indexes={@ORM\Index(name="createur_destination", columns={"createur_destination"})})
 * @ORM\Entity
 */
class Destination
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_destination", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDestination;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="createur_destination", type="string", length=60, nullable=false)
     */
    private $createurDestination;



    /**
     * Get idDestination
     *
     * @return integer 
     */
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Destination
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Destination
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set createurDestination
     *
     * @param string $createurDestination
     * @return Destination
     */
    public function setCreateurDestination($createurDestination)
    {
        $this->createurDestination = $createurDestination;

        return $this;
    }

    /**
     * Get createurDestination
     *
     * @return string 
     */
    public function getCreateurDestination()
    {
        return $this->createurDestination;
    }
}
