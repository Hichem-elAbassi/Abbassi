<?php

namespace Blitz\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupesmembres
 *
 * @ORM\Table(name="groupesmembres")
 * @ORM\Entity
 */
class Groupesmembres
{
    /**
     * @var string
     *
     * @ORM\Column(name="member_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;



    /**
     * Get memberId
     *
     * @return string 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return Groupesmembres
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
