<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditions
 *
 * @ORM\Table(name="conditions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConditionsRepository")
 */
class Conditions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_1", type="string", length=255, nullable=true)
     */
    private $conditionType1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_1_date", type="datetime", nullable=true)
     */
    private $conditionType1Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_1_comments", type="string", length=255, nullable=true)
     */
    private $conditionType1Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_2", type="string", length=255, nullable=true)
     */
    private $conditionType2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_2_date", type="datetime", nullable=true)
     */
    private $conditionType2Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_2_comments", type="string", length=255)
     */
    private $conditionType2Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_3", type="string", length=255, nullable=true)
     */
    private $conditionType3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_3_date", type="datetime", nullable=true)
     */
    private $conditionType3Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_3_comments", type="string", length=255, nullable=true)
     */
    private $conditionType3Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_4", type="string", length=255, nullable=true)
     */
    private $conditionType4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_4_date", type="datetime", nullable=true)
     */
    private $conditionType4Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_4_comments", type="string", length=255, nullable=true)
     */
    private $conditionType4Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_5", type="string", length=255, nullable=true)
     */
    private $conditionType5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_5_date", type="datetime", nullable=true)
     */
    private $conditionType5Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_5_commets", type="string", length=255, nullable=true)
     */
    private $conditionType5Commets;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_6", type="string", length=255, nullable=true)
     */
    private $conditionType6;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_6_date", type="datetime", nullable=true)
     */
    private $conditionType6Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_6_comments", type="string", length=255, nullable=true)
     */
    private $conditionType6Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_7", type="string", length=255, nullable=true)
     */
    private $conditionType7;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="condition_type_7_date", type="datetime", nullable=true)
     */
    private $conditionType7Date;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_type_7_comments", type="string", length=255, nullable=true)
     */
    private $conditionType7Comments;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="conditions")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patientId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set conditionType1
     *
     * @param string $conditionType1
     *
     * @return Conditions
     */
    public function setConditionType1($conditionType1)
    {
        $this->conditionType1 = $conditionType1;

        return $this;
    }

    /**
     * Get conditionType1
     *
     * @return string
     */
    public function getConditionType1()
    {
        return $this->conditionType1;
    }

    /**
     * Set conditionType1Date
     *
     * @param \DateTime $conditionType1Date
     *
     * @return Conditions
     */
    public function setConditionType1Date($conditionType1Date)
    {
        $this->conditionType1Date = $conditionType1Date;

        return $this;
    }

    /**
     * Get conditionType1Date
     *
     * @return \DateTime
     */
    public function getConditionType1Date()
    {
        return $this->conditionType1Date;
    }

    /**
     * Set conditionType1Comments
     *
     * @param string $conditionType1Comments
     *
     * @return Conditions
     */
    public function setConditionType1Comments($conditionType1Comments)
    {
        $this->conditionType1Comments = $conditionType1Comments;

        return $this;
    }

    /**
     * Get conditionType1Comments
     *
     * @return string
     */
    public function getConditionType1Comments()
    {
        return $this->conditionType1Comments;
    }

    /**
     * Set conditionType2
     *
     * @param string $conditionType2
     *
     * @return Conditions
     */
    public function setConditionType2($conditionType2)
    {
        $this->conditionType2 = $conditionType2;

        return $this;
    }

    /**
     * Get conditionType2
     *
     * @return string
     */
    public function getConditionType2()
    {
        return $this->conditionType2;
    }

    /**
     * Set conditionType2Date
     *
     * @param \DateTime $conditionType2Date
     *
     * @return Conditions
     */
    public function setConditionType2Date($conditionType2Date)
    {
        $this->conditionType2Date = $conditionType2Date;

        return $this;
    }

    /**
     * Get conditionType2Date
     *
     * @return \DateTime
     */
    public function getConditionType2Date()
    {
        return $this->conditionType2Date;
    }

    /**
     * Set conditionType2Comments
     *
     * @param string $conditionType2Comments
     *
     * @return Conditions
     */
    public function setConditionType2Comments($conditionType2Comments)
    {
        $this->conditionType2Comments = $conditionType2Comments;

        return $this;
    }

    /**
     * Get conditionType2Comments
     *
     * @return string
     */
    public function getConditionType2Comments()
    {
        return $this->conditionType2Comments;
    }

    /**
     * Set conditionType3
     *
     * @param string $conditionType3
     *
     * @return Conditions
     */
    public function setConditionType3($conditionType3)
    {
        $this->conditionType3 = $conditionType3;

        return $this;
    }

    /**
     * Get conditionType3
     *
     * @return string
     */
    public function getConditionType3()
    {
        return $this->conditionType3;
    }

    /**
     * Set conditionType3Date
     *
     * @param \DateTime $conditionType3Date
     *
     * @return Conditions
     */
    public function setConditionType3Date($conditionType3Date)
    {
        $this->conditionType3Date = $conditionType3Date;

        return $this;
    }

    /**
     * Get conditionType3Date
     *
     * @return \DateTime
     */
    public function getConditionType3Date()
    {
        return $this->conditionType3Date;
    }

    /**
     * Set conditionType3Comments
     *
     * @param string $conditionType3Comments
     *
     * @return Conditions
     */
    public function setConditionType3Comments($conditionType3Comments)
    {
        $this->conditionType3Comments = $conditionType3Comments;

        return $this;
    }

    /**
     * Get conditionType3Comments
     *
     * @return string
     */
    public function getConditionType3Comments()
    {
        return $this->conditionType3Comments;
    }

    /**
     * Set conditionType4
     *
     * @param string $conditionType4
     *
     * @return Conditions
     */
    public function setConditionType4($conditionType4)
    {
        $this->conditionType4 = $conditionType4;

        return $this;
    }

    /**
     * Get conditionType4
     *
     * @return string
     */
    public function getConditionType4()
    {
        return $this->conditionType4;
    }

    /**
     * Set conditionType4Date
     *
     * @param \DateTime $conditionType4Date
     *
     * @return Conditions
     */
    public function setConditionType4Date($conditionType4Date)
    {
        $this->conditionType4Date = $conditionType4Date;

        return $this;
    }

    /**
     * Get conditionType4Date
     *
     * @return \DateTime
     */
    public function getConditionType4Date()
    {
        return $this->conditionType4Date;
    }

    /**
     * Set conditionType4Comments
     *
     * @param string $conditionType4Comments
     *
     * @return Conditions
     */
    public function setConditionType4Comments($conditionType4Comments)
    {
        $this->conditionType4Comments = $conditionType4Comments;

        return $this;
    }

    /**
     * Get conditionType4Comments
     *
     * @return string
     */
    public function getConditionType4Comments()
    {
        return $this->conditionType4Comments;
    }

    /**
     * Set conditionType5
     *
     * @param string $conditionType5
     *
     * @return Conditions
     */
    public function setConditionType5($conditionType5)
    {
        $this->conditionType5 = $conditionType5;

        return $this;
    }

    /**
     * Get conditionType5
     *
     * @return string
     */
    public function getConditionType5()
    {
        return $this->conditionType5;
    }

    /**
     * Set conditionType5Date
     *
     * @param \DateTime $conditionType5Date
     *
     * @return Conditions
     */
    public function setConditionType5Date($conditionType5Date)
    {
        $this->conditionType5Date = $conditionType5Date;

        return $this;
    }

    /**
     * Get conditionType5Date
     *
     * @return \DateTime
     */
    public function getConditionType5Date()
    {
        return $this->conditionType5Date;
    }

    /**
     * Set conditionType5Commets
     *
     * @param string $conditionType5Commets
     *
     * @return Conditions
     */
    public function setConditionType5Commets($conditionType5Commets)
    {
        $this->conditionType5Commets = $conditionType5Commets;

        return $this;
    }

    /**
     * Get conditionType5Commets
     *
     * @return string
     */
    public function getConditionType5Commets()
    {
        return $this->conditionType5Commets;
    }

    /**
     * Set conditionType6
     *
     * @param string $conditionType6
     *
     * @return Conditions
     */
    public function setConditionType6($conditionType6)
    {
        $this->conditionType6 = $conditionType6;

        return $this;
    }

    /**
     * Get conditionType6
     *
     * @return string
     */
    public function getConditionType6()
    {
        return $this->conditionType6;
    }

    /**
     * Set conditionType6Date
     *
     * @param \DateTime $conditionType6Date
     *
     * @return Conditions
     */
    public function setConditionType6Date($conditionType6Date)
    {
        $this->conditionType6Date = $conditionType6Date;

        return $this;
    }

    /**
     * Get conditionType6Date
     *
     * @return \DateTime
     */
    public function getConditionType6Date()
    {
        return $this->conditionType6Date;
    }

    /**
     * Set conditionType6Comments
     *
     * @param string $conditionType6Comments
     *
     * @return Conditions
     */
    public function setConditionType6Comments($conditionType6Comments)
    {
        $this->conditionType6Comments = $conditionType6Comments;

        return $this;
    }

    /**
     * Get conditionType6Comments
     *
     * @return string
     */
    public function getConditionType6Comments()
    {
        return $this->conditionType6Comments;
    }

    /**
     * Set conditionType7
     *
     * @param string $conditionType7
     *
     * @return Conditions
     */
    public function setConditionType7($conditionType7)
    {
        $this->conditionType7 = $conditionType7;

        return $this;
    }

    /**
     * Get conditionType7
     *
     * @return string
     */
    public function getConditionType7()
    {
        return $this->conditionType7;
    }

    /**
     * Set conditionType7Date
     *
     * @param \DateTime $conditionType7Date
     *
     * @return Conditions
     */
    public function setConditionType7Date($conditionType7Date)
    {
        $this->conditionType7Date = $conditionType7Date;

        return $this;
    }

    /**
     * Get conditionType7Date
     *
     * @return \DateTime
     */
    public function getConditionType7Date()
    {
        return $this->conditionType7Date;
    }

    /**
     * Set conditionType7Comments
     *
     * @param string $conditionType7Comments
     *
     * @return Conditions
     */
    public function setConditionType7Comments($conditionType7Comments)
    {
        $this->conditionType7Comments = $conditionType7Comments;

        return $this;
    }

    /**
     * Get conditionType7Comments
     *
     * @return string
     */
    public function getConditionType7Comments()
    {
        return $this->conditionType7Comments;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Conditions
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get patientId
     *
     * @return int
     */
    public function getPatientId()
    {
        return $this->patientId;
    }
}

