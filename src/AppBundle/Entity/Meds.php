<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meds
 *
 * @ORM\Table(name="meds")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MedsRepository")
 */
class Meds
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
     * @ORM\Column(name="care_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Care", inversedBy="meds")
     * @ORM\JoinColumn(name="care_id", referencedColumnName="id")
     */
    private $careId;

    /**
     * @var string
     *
     * @ORM\Column(name="meds_name", type="string", length=255)
     */
    private $medsName;

    /**
     * @var int
     *
     * @ORM\Column(name="meds_dose", type="integer")
     */
    private $medsDose;

    /**
     * @var string
     *
     * @ORM\Column(name="meds_comments", type="string", length=255)
     */
    private $medsComments;

    /**
     * @var int
     *
     * @ORM\Column(name="meds_daily_dose", type="integer")
     */
    private $medsDailyDose;


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
     * Set careId
     *
     * @param integer $careId
     *
     * @return Meds
     */
    public function setCareId($careId)
    {
        $this->careId = $careId;

        return $this;
    }

    /**
     * Get careId
     *
     * @return int
     */
    public function getCareId()
    {
        return $this->careId;
    }

    /**
     * Set medsName
     *
     * @param string $medsName
     *
     * @return Meds
     */
    public function setMedsName($medsName)
    {
        $this->medsName = $medsName;

        return $this;
    }

    /**
     * Get medsName
     *
     * @return string
     */
    public function getMedsName()
    {
        return $this->medsName;
    }

    /**
     * Set medsDose
     *
     * @param integer $medsDose
     *
     * @return Meds
     */
    public function setMedsDose($medsDose)
    {
        $this->medsDose = $medsDose;

        return $this;
    }

    /**
     * Get medsDose
     *
     * @return int
     */
    public function getMedsDose()
    {
        return $this->medsDose;
    }

    /**
     * Set medsComments
     *
     * @param string $medsComments
     *
     * @return Meds
     */
    public function setMedsComments($medsComments)
    {
        $this->medsComments = $medsComments;

        return $this;
    }

    /**
     * Get medsComments
     *
     * @return string
     */
    public function getMedsComments()
    {
        return $this->medsComments;
    }

    /**
     * Set medsDailyDose
     *
     * @param integer $medsDailyDose
     *
     * @return Meds
     */
    public function setMedsDailyDose($medsDailyDose)
    {
        $this->medsDailyDose = $medsDailyDose;

        return $this;
    }

    /**
     * Get medsDailyDose
     *
     * @return int
     */
    public function getMedsDailyDose()
    {
        return $this->medsDailyDose;
    }
}

