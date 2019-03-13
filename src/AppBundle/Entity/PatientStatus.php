<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatientStatus
 *
 * @ORM\Table(name="patient_status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatientStatusRepository")
 */
class PatientStatus
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
     * @ORM\Column(name="status_type", type="string", length=255)
     */
    private $statusType;

    /**
     * @var string
     *
     * @ORM\Column(name="status_comments", type="string", length=255)
     */
    private $statusComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_date", type="datetime")
     */
    private $statusDate;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="patientstatus")
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
     * Set statusType
     *
     * @param string $statusType
     *
     * @return PatientStatus
     */
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Get statusType
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * Set statusComments
     *
     * @param string $statusComments
     *
     * @return PatientStatus
     */
    public function setStatusComments($statusComments)
    {
        $this->statusComments = $statusComments;

        return $this;
    }

    /**
     * Get statusComments
     *
     * @return string
     */
    public function getStatusComments()
    {
        return $this->statusComments;
    }

    /**
     * Set statusDate
     *
     * @param \DateTime $statusDate
     *
     * @return PatientStatus
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;

        return $this;
    }

    /**
     * Get statusDate
     *
     * @return \DateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return PatientStatus
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

