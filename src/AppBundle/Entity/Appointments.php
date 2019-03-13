<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointments
 *
 * @ORM\Table(name="appointments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AppointmentsRepository")
 */
class Appointments
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
     * @var \DateTime
     *
     * @ORM\Column(name="appointment_date", type="datetime")
     */
    private $appointmentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="appointment_type", type="string", length=255)
     */
    private $appointmentType;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="appointments")
     *  @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
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
     * Set appointmentDate
     *
     * @param \DateTime $appointmentDate
     *
     * @return Appointments
     */
    public function setAppointmentDate($appointmentDate)
    {
        $this->appointmentDate = $appointmentDate;

        return $this;
    }

    /**
     * Get appointmentDate
     *
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        return $this->appointmentDate;
    }

    /**
     * Set appointmentType
     *
     * @param string $appointmentType
     *
     * @return Appointments
     */
    public function setAppointmentType($appointmentType)
    {
        $this->appointmentType = $appointmentType;

        return $this;
    }

    /**
     * Get appointmentType
     *
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Appointments
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

