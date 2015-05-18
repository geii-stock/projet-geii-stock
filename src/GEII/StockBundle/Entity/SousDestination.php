<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousDestination
 *
 * @ORM\Table(name="sous_destination", indexes={@ORM\Index(name="id_destination_mere", columns={"id_destination_mere"})})
 * @ORM\Entity
 */
class SousDestination
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sousdest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousdest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_destination_mere", type="integer", nullable=false)
     */
    private $idDestinationMere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="createur", type="string", length=60, nullable=false)
     */
    private $createur;



    /**
     * Get idSousdest
     *
     * @return integer 
     */
    public function getIdSousdest()
    {
        return $this->idSousdest;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return SousDestination
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
     * Set idDestinationMere
     *
     * @param integer $idDestinationMere
     * @return SousDestination
     */
    public function setIdDestinationMere($idDestinationMere)
    {
        $this->idDestinationMere = $idDestinationMere;

        return $this;
    }

    /**
     * Get idDestinationMere
     *
     * @return integer 
     */
    public function getIdDestinationMere()
    {
        return $this->idDestinationMere;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return SousDestination
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
     * Set createur
     *
     * @param string $createur
     * @return SousDestination
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return string 
     */
    public function getCreateur()
    {
        return $this->createur;
    }
}
