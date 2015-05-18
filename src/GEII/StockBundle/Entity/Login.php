<?php

namespace GEII\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity
 */
class Login
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_login", type="datetime", nullable=false)
     */
    private $dateLogin;



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
     * Set dateLogin
     *
     * @param \DateTime $dateLogin
     * @return Login
     */
    public function setDateLogin($dateLogin)
    {
        $this->dateLogin = $dateLogin;

        return $this;
    }

    /**
     * Get dateLogin
     *
     * @return \DateTime 
     */
    public function getDateLogin()
    {
        return $this->dateLogin;
    }
}
