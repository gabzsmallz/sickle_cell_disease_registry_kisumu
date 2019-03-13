<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referrals
 *
 * @ORM\Table(name="referrals")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReferralsRepository")
 */
class Referrals
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
     * @ORM\Column(name="referral_from", type="string", length=255)
     */
    private $referralFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="referral_date", type="datetime")
     */
    private $referralDate;

    /**
     * @var string
     *
     * @ORM\Column(name="referring_doctor", type="string", length=255)
     */
    private $referringDoctor;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="referrals")
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
     * Set referralFrom
     *
     * @param string $referralFrom
     *
     * @return Referrals
     */
    public function setReferralFrom($referralFrom)
    {
        $this->referralFrom = $referralFrom;

        return $this;
    }

    /**
     * Get referralFrom
     *
     * @return string
     */
    public function getReferralFrom()
    {
        return $this->referralFrom;
    }

    /**
     * Set referralDate
     *
     * @param \DateTime $referralDate
     *
     * @return Referrals
     */
    public function setReferralDate($referralDate)
    {
        $this->referralDate = $referralDate;

        return $this;
    }

    /**
     * Get referralDate
     *
     * @return \DateTime
     */
    public function getReferralDate()
    {
        return $this->referralDate;
    }

    /**
     * Set referringDoctor
     *
     * @param string $referringDoctor
     *
     * @return Referrals
     */
    public function setReferringDoctor($referringDoctor)
    {
        $this->referringDoctor = $referringDoctor;

        return $this;
    }

    /**
     * Get referringDoctor
     *
     * @return string
     */
    public function getReferringDoctor()
    {
        return $this->referringDoctor;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Referrals
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

