<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table(name="tests")
 * @ORM\Entity
 */
class Tests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="test_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $testId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTest", type="string", length=255, nullable=false)
     */
    private $nomtest;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionTest", type="string", length=255, nullable=false)
     */
    private $descriptiontest;

    /**
     * @var string
     *
     * @ORM\Column(name="typeTest", type="string", length=255, nullable=false)
     */
    private $typetest;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreQuestions", type="integer", nullable=false)
     */
    private $nombrequestions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Questions", inversedBy="test")
     * @ORM\JoinTable(name="testquestions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="test_id", referencedColumnName="test_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="question_id", referencedColumnName="question_id")
     *   }
     * )
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get testId
     *
     * @return integer 
     */
    public function getTestId()
    {
        return $this->testId;
    }

    /**
     * Set nomtest
     *
     * @param string $nomtest
     * @return Tests
     */
    public function setNomtest($nomtest)
    {
        $this->nomtest = $nomtest;

        return $this;
    }

    /**
     * Get nomtest
     *
     * @return string 
     */
    public function getNomtest()
    {
        return $this->nomtest;
    }

    /**
     * Set descriptiontest
     *
     * @param string $descriptiontest
     * @return Tests
     */
    public function setDescriptiontest($descriptiontest)
    {
        $this->descriptiontest = $descriptiontest;

        return $this;
    }

    /**
     * Get descriptiontest
     *
     * @return string 
     */
    public function getDescriptiontest()
    {
        return $this->descriptiontest;
    }

    /**
     * Set typetest
     *
     * @param string $typetest
     * @return Tests
     */
    public function setTypetest($typetest)
    {
        $this->typetest = $typetest;

        return $this;
    }

    /**
     * Get typetest
     *
     * @return string 
     */
    public function getTypetest()
    {
        return $this->typetest;
    }

    /**
     * Set nombrequestions
     *
     * @param integer $nombrequestions
     * @return Tests
     */
    public function setNombrequestions($nombrequestions)
    {
        $this->nombrequestions = $nombrequestions;

        return $this;
    }

    /**
     * Get nombrequestions
     *
     * @return integer 
     */
    public function getNombrequestions()
    {
        return $this->nombrequestions;
    }

    /**
     * Add question
     *
     * @param \Blitz\BackOfficeBundle\Entity\Questions $question
     * @return Tests
     */
    public function addQuestion(\Blitz\BackOfficeBundle\Entity\Questions $question)
    {
        $this->question[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Blitz\BackOfficeBundle\Entity\Questions $question
     */
    public function removeQuestion(\Blitz\BackOfficeBundle\Entity\Questions $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
