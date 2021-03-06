<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="id_article", columns={"id_article"}), @ORM\Index(name="id_categorie", columns={"id_categorie"}), @ORM\Index(name="id_sous_categorie", columns={"id_sous_categorie"}), @ORM\Index(name="id_destination", columns={"id_destination"}), @ORM\Index(name="id_sous_destination", columns={"id_sous_destination"}), @ORM\Index(name="createur_article", columns={"createur_article"})})
 * @ORM\Entity
 */
class Article
{

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=60, nullable=false)
     */
    private $reference;

    /**
     * @var /Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie = '0';

    /**
     * @var /SousCategorie
     *
     * @ORM\ManyToOne(targetEntity="SousCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_categorie", referencedColumnName="id_soucat")
     * })
     */
    private $idSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=60, nullable=false)
     */
    private $designation;

    /**
     * @var /Destination
     *
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destination", referencedColumnName="id_destination")
     * })
     */
    private $idDestination;

    /**
     * @var /SousDestination
     *
     * @ORM\ManyToOne(targetEntity="SousDestination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_destination", referencedColumnName="id_sousdest")
     * })
     */
    private $idSousDestination;

    /**
     * @var integer
     *
     * @ORM\Column(name="udv", type="integer", nullable=true)
     */
    private $udv;

    /**
     * @var integer
     *
     * @ORM\Column(name="seuilbas", type="integer", nullable=true)
     */
    private $seuilbas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="createur_article", type="string", length=60, nullable=false)
     */
    private $createurArticle;



    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     * @return Article
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return integer 
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     * @return Article
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idSousCategorie
     *
     * @param integer $idSousCategorie
     * @return Article
     */
    public function setIdSousCategorie($idSousCategorie)
    {
        $this->idSousCategorie = $idSousCategorie;

        return $this;
    }

    /**
     * Get idSousCategorie
     *
     * @return integer 
     */
    public function getIdSousCategorie()
    {
        return $this->idSousCategorie;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Article
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set idDestination
     *
     * @param integer $idDestination
     * @return Article
     */
    public function setIdDestination($idDestination)
    {
        $this->idDestination = $idDestination;

        return $this;
    }

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
     * Set idSousDestination
     *
     * @param integer $idSousDestination
     * @return Article
     */
    public function setIdSousDestination($idSousDestination)
    {
        $this->idSousDestination = $idSousDestination;

        return $this;
    }

    /**
     * Get idSousDestination
     *
     * @return integer 
     */
    public function getIdSousDestination()
    {
        return $this->idSousDestination;
    }

    /**
     * Set udv
     *
     * @param integer $udv
     * @return Article
     */
    public function setUdv($udv)
    {
        $this->udv = $udv;

        return $this;
    }

    /**
     * Get udv
     *
     * @return integer 
     */
    public function getUdv()
    {
        return $this->udv;
    }

    /**
     * Set seuilbas
     *
     * @param integer $seuilbas
     * @return Article
     */
    public function setSeuilbas($seuilbas)
    {
        $this->seuilbas = $seuilbas;

        return $this;
    }

    /**
     * Get seuilbas
     *
     * @return integer 
     */
    public function getSeuilbas()
    {
        return $this->seuilbas;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Article
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
     * Set createurArticle
     *
     * @param string $createurArticle
     * @return Article
     */
    public function setCreateurArticle($createurArticle)
    {
        $this->createurArticle = $createurArticle;

        return $this;
    }

    /**
     * Get createurArticle
     *
     * @return string 
     */
    public function getCreateurArticle()
    {
        return $this->createurArticle;
    }
}
