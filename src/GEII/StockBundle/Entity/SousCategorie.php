<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategorie
 *
 * @ORM\Table(name="sous_categorie", indexes={@ORM\Index(name="id_categorie_mere", columns={"id_categorie_mere"})})
 * @ORM\Entity
 */
class SousCategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_soucat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSoucat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie_mere", type="integer", nullable=false)
     */
    private $idCategorieMere;

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
     * Get idSoucat
     *
     * @return integer 
     */
    public function getIdSoucat()
    {
        return $this->idSoucat;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return SousCategorie
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
     * Set idCategorieMere
     *
     * @param integer $idCategorieMere
     * @return SousCategorie
     */
    public function setIdCategorieMere($idCategorieMere)
    {
        $this->idCategorieMere = $idCategorieMere;

        return $this;
    }

    /**
     * Get idCategorieMere
     *
     * @return integer 
     */
    public function getIdCategorieMere()
    {
        return $this->idCategorieMere;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return SousCategorie
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
     * @return SousCategorie
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
