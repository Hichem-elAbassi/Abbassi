<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacks
 *
 * @ORM\Table(name="feedbacks")
 * @ORM\Entity
 */
class Feedbacks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedback_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedbackId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     */
    private $utilisateurId;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;



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
     * @return Feedbacks
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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Feedbacks
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return Feedbacks
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }
}
