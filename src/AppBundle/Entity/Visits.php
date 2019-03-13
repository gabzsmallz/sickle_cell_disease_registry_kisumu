<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Visits
 *
 * @ORM\Table(name="visits")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitsRepository")
 */
class Visits
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
     * @ORM\Column(name="date_of_visit", type="datetime")
     */
    private $dateOfVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="type_of_visit", type="string", length=45)
     */
    private $typeOfVisit;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="visits")
     *  @ORM\JoinColumn(name="patient_id", referencedColumnName="id" )
    */
    private $patientId;
    /**
    *   @ORM\OneToMany(targetEntity="Triage", mappedBy="visitId")
    */
    protected $triages;

    public function __construct()
    {
        $this->triages = new ArrayCollection();
    }

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
     * Set dateOfVisit
     *
     * @param \DateTime $dateOfVisit
     *
     * @return Visits
     */
    public function setDateOfVisit($dateOfVisit)
    {
        $this->dateOfVisit = $dateOfVisit;

        return $this;
    }

    /**
     * Get dateOfVisit
     *
     * @return \DateTime
     */
    public function getDateOfVisit()
    {
        return $this->dateOfVisit;
    }

    /**
     * Set typeOfVisit
     *
     * @param string $typeOfVisit
     *
     * @return Visits
     */
    public function setTypeOfVisit($typeOfVisit)
    {
        $this->typeOfVisit = $typeOfVisit;

        return $this;
    }

    /**
     * Get typeOfVisit
     *
     * @return string
     */
    public function getTypeOfVisit()
    {
        return $this->typeOfVisit;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Visits
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

