<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Care
 *
 * @ORM\Table(name="care")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CareRepository")
 */
class Care
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
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="cares")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patientId;

    /**
     * @var string
     *
     * @ORM\Column(name="treatment", type="string", length=255)
     */
    private $treatment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="treament_start_date", type="datetime")
     */
    private $treamentStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="treament_end_date", type="datetime")
     */
    private $treamentEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="treatment_comments", type="string", length=255)
     */
    private $treatmentComments;

    /**
    *   @ORM\OneToMany(targetEntity="Meds", mappedBy="careId")
    */
    protected $meds;

    public function __construct()
    {
        $this->meds = new ArrayCollection();
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
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Care
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

    /**
     * Set treatment
     *
     * @param string $treatment
     *
     * @return Care
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;

        return $this;
    }

    /**
     * Get treatment
     *
     * @return string
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Set treamentStartDate
     *
     * @param \DateTime $treamentStartDate
     *
     * @return Care
     */
    public function setTreamentStartDate($treamentStartDate)
    {
        $this->treamentStartDate = $treamentStartDate;

        return $this;
    }

    /**
     * Get treamentStartDate
     *
     * @return \DateTime
     */
    public function getTreamentStartDate()
    {
        return $this->treamentStartDate;
    }

    /**
     * Set treamentEndDate
     *
     * @param \DateTime $treamentEndDate
     *
     * @return Care
     */
    public function setTreamentEndDate($treamentEndDate)
    {
        $this->treamentEndDate = $treamentEndDate;

        return $this;
    }

    /**
     * Get treamentEndDate
     *
     * @return \DateTime
     */
    public function getTreamentEndDate()
    {
        return $this->treamentEndDate;
    }

    /**
     * Set treatmentComments
     *
     * @param string $treatmentComments
     *
     * @return Care
     */
    public function setTreatmentComments($treatmentComments)
    {
        $this->treatmentComments = $treatmentComments;

        return $this;
    }

    /**
     * Get treatmentComments
     *
     * @return string
     */
    public function getTreatmentComments()
    {
        return $this->treatmentComments;
    }
}

