<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurgicalHistory
 *
 * @ORM\Table(name="surgical_history")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SurgicalHistoryRepository")
 */
class SurgicalHistory
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
     * @ORM\Column(name="surgery_conducted_1", type="string", length=255, nullable=true)
     */
    private $surgeryConducted1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="surgery_conducted_1_date", type="datetime", nullable=true)
     */
    private $surgeryConducted1Date;

    /**
     * @var string
     *
     * @ORM\Column(name="surgery_conducted_2", type="string", length=255, nullable=true)
     */
    private $surgeryConducted2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="surgery_conducted_2_date", type="datetime", nullable=true)
     */
    private $surgeryConducted2Date;

    /**
     * @var string
     *
     * @ORM\Column(name="surgery_conducted_3", type="string", length=255, nullable=true)
     */
    private $surgeryConducted3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="surgery_conducted_3_date", type="datetime", nullable=true)
     */
    private $surgeryConducted3Date;

    /**
     * @var string
     *
     * @ORM\Column(name="surgery_conducted_4", type="string", length=255, nullable=true)
     */
    private $surgeryConducted4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="surgery_conducted_4_date", type="datetime", nullable=true)
     */
    private $surgeryConducted4Date;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="surgeries")
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
     * Set surgeryConducted1
     *
     * @param string $surgeryConducted1
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted1($surgeryConducted1)
    {
        $this->surgeryConducted1 = $surgeryConducted1;

        return $this;
    }

    /**
     * Get surgeryConducted1
     *
     * @return string
     */
    public function getSurgeryConducted1()
    {
        return $this->surgeryConducted1;
    }

    /**
     * Set surgeryConducted1Date
     *
     * @param \DateTime $surgeryConducted1Date
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted1Date($surgeryConducted1Date)
    {
        $this->surgeryConducted1Date = $surgeryConducted1Date;

        return $this;
    }

    /**
     * Get surgeryConducted1Date
     *
     * @return \DateTime
     */
    public function getSurgeryConducted1Date()
    {
        return $this->surgeryConducted1Date;
    }

    /**
     * Set surgeryConducted2
     *
     * @param string $surgeryConducted2
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted2($surgeryConducted2)
    {
        $this->surgeryConducted2 = $surgeryConducted2;

        return $this;
    }

    /**
     * Get surgeryConducted2
     *
     * @return string
     */
    public function getSurgeryConducted2()
    {
        return $this->surgeryConducted2;
    }

    /**
     * Set surgeryConducted2Date
     *
     * @param \DateTime $surgeryConducted2Date
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted2Date($surgeryConducted2Date)
    {
        $this->surgeryConducted2Date = $surgeryConducted2Date;

        return $this;
    }

    /**
     * Get surgeryConducted2Date
     *
     * @return \DateTime
     */
    public function getSurgeryConducted2Date()
    {
        return $this->surgeryConducted2Date;
    }

    /**
     * Set surgeryConducted3
     *
     * @param string $surgeryConducted3
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted3($surgeryConducted3)
    {
        $this->surgeryConducted3 = $surgeryConducted3;

        return $this;
    }

    /**
     * Get surgeryConducted3
     *
     * @return string
     */
    public function getSurgeryConducted3()
    {
        return $this->surgeryConducted3;
    }

    /**
     * Set surgeryConducted3Date
     *
     * @param \DateTime $surgeryConducted3Date
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted3Date($surgeryConducted3Date)
    {
        $this->surgeryConducted3Date = $surgeryConducted3Date;

        return $this;
    }

    /**
     * Get surgeryConducted3Date
     *
     * @return \DateTime
     */
    public function getSurgeryConducted3Date()
    {
        return $this->surgeryConducted3Date;
    }

    /**
     * Set surgeryConducted4
     *
     * @param string $surgeryConducted4
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted4($surgeryConducted4)
    {
        $this->surgeryConducted4 = $surgeryConducted4;

        return $this;
    }

    /**
     * Get surgeryConducted4
     *
     * @return string
     */
    public function getSurgeryConducted4()
    {
        return $this->surgeryConducted4;
    }

    /**
     * Set surgeryConducted4Date
     *
     * @param \DateTime $surgeryConducted4Date
     *
     * @return SurgicalHistory
     */
    public function setSurgeryConducted4Date($surgeryConducted4Date)
    {
        $this->surgeryConducted4Date = $surgeryConducted4Date;

        return $this;
    }

    /**
     * Get surgeryConducted4Date
     *
     * @return \DateTime
     */
    public function getSurgeryConducted4Date()
    {
        return $this->surgeryConducted4Date;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return SurgicalHistory
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

