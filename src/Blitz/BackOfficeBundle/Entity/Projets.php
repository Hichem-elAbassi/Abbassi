<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity
 */
class Projets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="projet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="jobOwner_id", type="integer", nullable=true)
     */
    private $jobownerId;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_freelancer", type="integer", nullable=true)
     */
    private $nombreFreelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="typeContrat", type="string", length=255, nullable=true)
     */
    private $typecontrat;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=true)
     */
    private $duree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;



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
     * Set jobownerId
     *
     * @param integer $jobownerId
     * @return Projets
     */
    public function setJobownerId($jobownerId)
    {
        $this->jobownerId = $jobownerId;

        return $this;
    }

    /**
     * Get jobownerId
     *
     * @return integer 
     */
    public function getJobownerId()
    {
        return $this->jobownerId;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Projets
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projets
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Projets
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nombreFreelancer
     *
     * @param integer $nombreFreelancer
     * @return Projets
     */
    public function setNombreFreelancer($nombreFreelancer)
    {
        $this->nombreFreelancer = $nombreFreelancer;

        return $this;
    }

    /**
     * Get nombreFreelancer
     *
     * @return integer 
     */
    public function getNombreFreelancer()
    {
        return $this->nombreFreelancer;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Projets
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set typecontrat
     *
     * @param string $typecontrat
     * @return Projets
     */
    public function setTypecontrat($typecontrat)
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    /**
     * Get typecontrat
     *
     * @return string 
     */
    public function getTypecontrat()
    {
        return $this->typecontrat;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     * @return Projets
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float 
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Projets
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Projets
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
