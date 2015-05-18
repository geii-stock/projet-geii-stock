<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journalvieux
 *
 * @ORM\Table(name="journalvieux", uniqueConstraints={@ORM\UniqueConstraint(name="reference_2", columns={"reference"})}, indexes={@ORM\Index(name="createur_mouvement", columns={"createur_mouvement"})})
 * @ORM\Entity
 */
class Journalvieux
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
     * @ORM\Column(name="reference", type="string", length=60, nullable=true)
     */
    private $reference;

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
     * Get idMouvement
     *
     * @return integer 
     */
    public function getIdMouvement()
    {
        return $this->idMouvement;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Journalvieux
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

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
     * Set prixht
     *
     * @param string $prixht
     * @return Journalvieux
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
     * @return Journalvieux
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
     * @return Journalvieux
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
     * @return Journalvieux
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
     * @return Journalvieux
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
     * @return Journalvieux
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
}
