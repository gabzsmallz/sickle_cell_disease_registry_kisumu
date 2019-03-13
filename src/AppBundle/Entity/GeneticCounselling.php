<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneticCounselling
 *
 * @ORM\Table(name="genetic_counselling")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GeneticCounsellingRepository")
 */
class GeneticCounselling
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
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="consellings")
     *  @ORM\JoinColumn(name="patient_id", referencedColumnName="id" )
     */
    private $patientId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_counselling", type="datetime")
     */
    private $dateOfCounselling;

    /**
     * @var string
     *
     * @ORM\Column(name="counselling_comments", type="string", length=255)
     */
    private $counsellingComments;


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
     * @return GeneticCounselling
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
     * Set dateOfCounselling
     *
     * @param \DateTime $dateOfCounselling
     *
     * @return GeneticCounselling
     */
    public function setDateOfCounselling($dateOfCounselling)
    {
        $this->dateOfCounselling = $dateOfCounselling;

        return $this;
    }

    /**
     * Get dateOfCounselling
     *
     * @return \DateTime
     */
    public function getDateOfCounselling()
    {
        return $this->dateOfCounselling;
    }

    /**
     * Set counsellingComments
     *
     * @param string $counsellingComments
     *
     * @return GeneticCounselling
     */
    public function setCounsellingComments($counsellingComments)
    {
        $this->counsellingComments = $counsellingComments;

        return $this;
    }

    /**
     * Get counsellingComments
     *
     * @return string
     */
    public function getCounsellingComments()
    {
        return $this->counsellingComments;
    }
}

