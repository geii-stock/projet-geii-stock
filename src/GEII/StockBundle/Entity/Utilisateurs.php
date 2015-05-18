<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs", uniqueConstraints={@ORM\UniqueConstraint(name="id_utilisateur", columns={"id_utilisateur"})}, indexes={@ORM\Index(name="id_statut", columns={"id_statut"})})
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alerteseuilbas", type="boolean", nullable=true)
     */
    private $alerteseuilbas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alertedepot", type="boolean", nullable=true)
     */
    private $alertedepot;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alerteretrait", type="boolean", nullable=true)
     */
    private $alerteretrait;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alertecreeref", type="boolean", nullable=true)
     */
    private $alertecreeref;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_statut", referencedColumnName="id_statut")
     * })
     */
    private $idStatut;



    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     * @return Utilisateurs
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateurs
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateurs
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Utilisateurs
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateurs
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Utilisateurs
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
     * Set alerteseuilbas
     *
     * @param boolean $alerteseuilbas
     * @return Utilisateurs
     */
    public function setAlerteseuilbas($alerteseuilbas)
    {
        $this->alerteseuilbas = $alerteseuilbas;

        return $this;
    }

    /**
     * Get alerteseuilbas
     *
     * @return boolean 
     */
    public function getAlerteseuilbas()
    {
        return $this->alerteseuilbas;
    }

    /**
     * Set alertedepot
     *
     * @param boolean $alertedepot
     * @return Utilisateurs
     */
    public function setAlertedepot($alertedepot)
    {
        $this->alertedepot = $alertedepot;

        return $this;
    }

    /**
     * Get alertedepot
     *
     * @return boolean 
     */
    public function getAlertedepot()
    {
        return $this->alertedepot;
    }

    /**
     * Set alerteretrait
     *
     * @param boolean $alerteretrait
     * @return Utilisateurs
     */
    public function setAlerteretrait($alerteretrait)
    {
        $this->alerteretrait = $alerteretrait;

        return $this;
    }

    /**
     * Get alerteretrait
     *
     * @return boolean 
     */
    public function getAlerteretrait()
    {
        return $this->alerteretrait;
    }

    /**
     * Set alertecreeref
     *
     * @param boolean $alertecreeref
     * @return Utilisateurs
     */
    public function setAlertecreeref($alertecreeref)
    {
        $this->alertecreeref = $alertecreeref;

        return $this;
    }

    /**
     * Get alertecreeref
     *
     * @return boolean 
     */
    public function getAlertecreeref()
    {
        return $this->alertecreeref;
    }

    /**
     * Set idStatut
     *
     * @param \GEII\StockBundle\Entity\Statut $idStatut
     * @return Utilisateurs
     */
    public function setIdStatut(\GEII\StockBundle\Entity\Statut $idStatut = null)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * Get idStatut
     *
     * @return \GEII\StockBundle\Entity\Statut 
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }
}
