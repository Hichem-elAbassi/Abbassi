<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetsuivi
 *
 * @ORM\Table(name="projetsuivi")
 * @ORM\Entity
 */
class Projetsuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="projet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $projetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $utilisateurId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $status;



    /**
     * Set projetId
     *
     * @param integer $projetId
     * @return Projetsuivi
     */
    public function setProjetId($projetId)
    {
        $this->projetId = $projetId;

        return $this;
    }

    /**
     * Get projetId
     *
     * @return integer 
     */
    public function getProjetId()
    {
        return $this->projetId;
    }

    /**
     * Set utilisateurId
     *
     * @param integer $utilisateurId
     * @return Projetsuivi
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    /**
     * Get utilisateurId
     *
     * @return integer 
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Projetsuivi
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
