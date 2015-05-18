<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal", indexes={@ORM\Index(name="createur_mouvement", columns={"createur_mouvement"}), @ORM\Index(name="id_article", columns={"id_article"})})
 * @ORM\Entity
 */
class Journal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mouvement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMouvement;

    /**
     * @var string
     *
     * @ORM\Column(name="prixht", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prixht;

    /**
     * @var string
     *
     * @ORM\Column(name="prixttc", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prixttc;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateha", type="date", nullable=false)
     */
    private $dateha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="createur_mouvement", type="string", length=60, nullable=false)
     */
    private $createurMouvement;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     * })
     */
    private $idArticle;



    /**
     * Get idMouvement
     *
     * @return integer 
     */
    public function getIdMouvement()
    {
        return $this->idMouvement;
    }

    /**
     * Set prixht
     *
     * @param string $prixht
     * @return Journal
     */
    public function setPrixht($prixht)
    {
        $this->prixht = $prixht;

        return $this;
    }

    /**
     * Get prixht
     *
     * @return string 
     */
    public function getPrixht()
    {
        return $this->prixht;
    }

    /**
     * Set prixttc
     *
     * @param string $prixttc
     * @return Journal
     */
    public function setPrixttc($prixttc)
    {
        $this->prixttc = $prixttc;

        return $this;
    }

    /**
     * Get prixttc
     *
     * @return string 
     */
    public function getPrixttc()
    {
        return $this->prixttc;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Journal
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set dateha
     *
     * @param \DateTime $dateha
     * @return Journal
     */
    public function setDateha($dateha)
    {
        $this->dateha = $dateha;

        return $this;
    }

    /**
     * Get dateha
     *
     * @return \DateTime 
     */
    public function getDateha()
    {
        return $this->dateha;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Journal
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
     * Set createurMouvement
     *
     * @param string $createurMouvement
     * @return Journal
     */
    public function setCreateurMouvement($createurMouvement)
    {
        $this->createurMouvement = $createurMouvement;

        return $this;
    }

    /**
     * Get createurMouvement
     *
     * @return string 
     */
    public function getCreateurMouvement()
    {
        return $this->createurMouvement;
    }

    /**
     * Set idArticle
     *
     * @param \GEII\StockBundle\Entity\Article $idArticle
     * @return Journal
     */
    public function setIdArticle(\GEII\StockBundle\Entity\Article $idArticle = null)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return \GEII\StockBundle\Entity\Article 
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }
}
