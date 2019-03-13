<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Triage
 *
 * @ORM\Table(name="triage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TriageRepository")
 */
class Triage
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
     * @ORM\Column(name="visit_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Visits", inversedBy="triages")
     *  @ORM\JoinColumn(name="visit_id", referencedColumnName="id" )
     */
    private $visitId;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float")
     */
    private $height;

    /**
     * @var float
     *
     * @ORM\Column(name="bmi", type="float")
     */
    private $bmi;

    /**
     * @var float
     *
     * @ORM\Column(name="blood_pressure", type="float")
     */
    private $bloodPressure;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float")
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="prothrombin_time", type="float")
     */
    private $prothrombinTime;

    /**
     * @var string
     *
     * @ORM\Column(name="symptoms", type="string", length=255)
     */
    private $symptoms;
    /**
    *   @ORM\OneToMany(targetEntity="LabRadiology", mappedBy="triageId")
    */
    protected $labs;

    public function __construct()
    {
        $this->labs = new ArrayCollection();
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
     * Set visitId
     *
     * @param integer $visitId
     *
     * @return Triage
     */
    public function setVisitId($visitId)
    {
        $this->visitId = $visitId;

        return $this;
    }

    /**
     * Get visitId
     *
     * @return int
     */
    public function getVisitId()
    {
        return $this->visitId;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Triage
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param float $height
     *
     * @return Triage
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set bmi
     *
     * @param float $bmi
     *
     * @return Triage
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;

        return $this;
    }

    /**
     * Get bmi
     *
     * @return float
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set bloodPressure
     *
     * @param float $bloodPressure
     *
     * @return Triage
     */
    public function setBloodPressure($bloodPressure)
    {
        $this->bloodPressure = $bloodPressure;

        return $this;
    }

    /**
     * Get bloodPressure
     *
     * @return float
     */
    public function getBloodPressure()
    {
        return $this->bloodPressure;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Triage
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set prothrombinTime
     *
     * @param float $prothrombinTime
     *
     * @return Triage
     */
    public function setProthrombinTime($prothrombinTime)
    {
        $this->prothrombinTime = $prothrombinTime;

        return $this;
    }

    /**
     * Get prothrombinTime
     *
     * @return float
     */
    public function getProthrombinTime()
    {
        return $this->prothrombinTime;
    }

    /**
     * Set symptoms
     *
     * @param string $symptoms
     *
     * @return Triage
     */
    public function setSymptoms($symptoms)
    {
        $this->symptoms = $symptoms;

        return $this;
    }

    /**
     * Get symptoms
     *
     * @return string
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }
}

