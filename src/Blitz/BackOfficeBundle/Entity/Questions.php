<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="corpsQuestion", type="string", length=255, nullable=false)
     */
    private $corpsquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="poidsQuestion", type="string", length=255, nullable=false)
     */
    private $poidsquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tests", mappedBy="question")
     */
    private $test;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->test = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set corpsquestion
     *
     * @param string $corpsquestion
     * @return Questions
     */
    public function setCorpsquestion($corpsquestion)
    {
        $this->corpsquestion = $corpsquestion;

        return $this;
    }

    /**
     * Get corpsquestion
     *
     * @return string 
     */
    public function getCorpsquestion()
    {
        return $this->corpsquestion;
    }

    /**
     * Set poidsquestion
     *
     * @param string $poidsquestion
     * @return Questions
     */
    public function setPoidsquestion($poidsquestion)
    {
        $this->poidsquestion = $poidsquestion;

        return $this;
    }

    /**
     * Get poidsquestion
     *
     * @return string 
     */
    public function getPoidsquestion()
    {
        return $this->poidsquestion;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Questions
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Questions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add test
     *
     * @param \Blitz\BackOfficeBundle\Entity\Tests $test
     * @return Questions
     */
    public function addTest(\Blitz\BackOfficeBundle\Entity\Tests $test)
    {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \Blitz\BackOfficeBundle\Entity\Tests $test
     */
    public function removeTest(\Blitz\BackOfficeBundle\Entity\Tests $test)
    {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTest()
    {
        return $this->test;
    }
}
