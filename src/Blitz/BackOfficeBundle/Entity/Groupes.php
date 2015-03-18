<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity
 */
class Groupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="chefgroup_id", type="integer", nullable=false)
     */
    private $chefgroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomgroup", type="string", length=255, nullable=false)
     */
    private $nomgroup;



    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set chefgroupId
     *
     * @param integer $chefgroupId
     * @return Groupes
     */
    public function setChefgroupId($chefgroupId)
    {
        $this->chefgroupId = $chefgroupId;

        return $this;
    }

    /**
     * Get chefgroupId
     *
     * @return integer 
     */
    public function getChefgroupId()
    {
        return $this->chefgroupId;
    }

    /**
     * Set nomgroup
     *
     * @param string $nomgroup
     * @return Groupes
     */
    public function setNomgroup($nomgroup)
    {
        $this->nomgroup = $nomgroup;

        return $this;
    }

    /**
     * Get nomgroup
     *
     * @return string 
     */
    public function getNomgroup()
    {
        return $this->nomgroup;
    }
}
