<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity
 */
class Cv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cv_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvId;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="string", length=255, nullable=false)
     */
    private $skills;

    /**
     * @var string
     *
     * @ORM\Column(name="certifications", type="string", length=255, nullable=false)
     */
    private $certifications;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255, nullable=false)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="experiences", type="string", length=255, nullable=false)
     */
    private $experiences;



    /**
     * Get cvId
     *
     * @return integer 
     */
    public function getCvId()
    {
        return $this->cvId;
    }

    /**
     * Set skills
     *
     * @param string $skills
     * @return Cv
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set certifications
     *
     * @param string $certifications
     * @return Cv
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;

        return $this;
    }

    /**
     * Get certifications
     *
     * @return string 
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * Set education
     *
     * @param string $education
     * @return Cv
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set experiences
     *
     * @param string $experiences
     * @return Cv
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;

        return $this;
    }

    /**
     * Get experiences
     *
     * @return string 
     */
    public function getExperiences()
    {
        return $this->experiences;
    }
}
