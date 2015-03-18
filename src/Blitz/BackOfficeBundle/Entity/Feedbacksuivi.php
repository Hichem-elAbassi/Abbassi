<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacksuivi
 *
 * @ORM\Table(name="feedbacksuivi")
 * @ORM\Entity
 */
class Feedbacksuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedback_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $feedbackId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $utilisateurId;



    /**
     * Set feedbackId
     *
     * @param integer $feedbackId
     * @return Feedbacksuivi
     */
    public function setFeedbackId($feedbackId)
    {
        $this->feedbackId = $feedbackId;

        return $this;
    }

    /**
     * Get feedbackId
     *
     * @return integer 
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }

    /**
     * Set utilisateurId
     *
     * @param integer $utilisateurId
     * @return Feedbacksuivi
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
}
