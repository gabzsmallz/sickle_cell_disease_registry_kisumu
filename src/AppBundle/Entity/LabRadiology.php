<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabRadiology
 *
 * @ORM\Table(name="lab_radiology")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LabRadiologyRepository")
 */
class LabRadiology
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
     * @var float
     *
     * @ORM\Column(name="haemoglobin", type="float")
     */
    private $haemoglobin;

    /**
     * @var float
     *
     * @ORM\Column(name="rectic_count", type="float")
     */
    private $recticCount;

    /**
     * @var float
     *
     * @ORM\Column(name="mean_corpuscular_volume", type="float")
     */
    private $meanCorpuscularVolume;

    /**
     * @var float
     *
     * @ORM\Column(name="haematocrit", type="float")
     */
    private $haematocrit;

    /**
     * @var float
     *
     * @ORM\Column(name="platelet_count", type="float")
     */
    private $plateletCount;

    /**
     * @var float
     *
     * @ORM\Column(name="creatinine", type="float")
     */
    private $creatinine;

    /**
     * @var float
     *
     * @ORM\Column(name="bilirubin", type="float")
     */
    private $bilirubin;

    /**
     * @var float
     *
     * @ORM\Column(name="transcranial_doppler", type="float")
     */
    private $transcranialDoppler;

    /**
     * @var float
     *
     * @ORM\Column(name="echocardiogram", type="float")
     */
    private $echocardiogram;

    /**
     * @var string
     *
     * @ORM\Column(name="echo_comments", type="string", length=255)
     */
    private $echoComments;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_1", type="string", length=255, nullable=true)
     */
    private $otherTest1;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_1_comments", type="string", length=255, nullable=true)
     */
    private $otherTest1Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_2", type="string", length=255, nullable=true)
     */
    private $otherTest2;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_2_comments", type="string", length=255, nullable=true)
     */
    private $otherTest2Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_3", type="string", length=255, nullable=true)
     */
    private $otherTest3;

    /**
     * @var string
     *
     * @ORM\Column(name="other_test_3_comments", type="string", length=255, nullable=true)
     */
    private $otherTest3Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="haemoglobin_comments", type="string", length=255, nullable=true)
     */
    private $haemoglobinComments;

    /**
     * @var string
     *
     * @ORM\Column(name="rectic_count_comments", type="string", length=255, nullable=true)
     */
    private $recticCountComments;

    /**
     * @var string
     *
     * @ORM\Column(name="mean_corpuscular_volume_comments", type="string", length=255, nullable=true)
     */
    private $meanCorpuscularVolumeComments;

    /**
     * @var string
     *
     * @ORM\Column(name="haematocrit_comments", type="string", length=255, nullable=true)
     */
    private $haematocritComments;

    /**
     * @var string
     *
     * @ORM\Column(name="platelet_count_comments", type="string", length=255, nullable=true)
     */
    private $plateletCountComments;

    /**
     * @var string
     *
     * @ORM\Column(name="creatinine_comments", type="string", length=255, nullable=true)
     */
    private $creatinineComments;

    /**
     * @var string
     *
     * @ORM\Column(name="bilirubin_commets", type="string", length=255, nullable=true)
     */
    private $bilirubinCommets;

    /**
     * @var string
     *
     * @ORM\Column(name="transcranial_doppler_comments", type="string", length=255)
     */
    private $transcranialDopplerComments;

    /**
     * @var int
     *
     * @ORM\Column(name="triage_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Triage", inversedBy="labs")
     * @ORM\JoinColumn(name="triage_id", referencedColumnName="id")
     */
    private $triageId;


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
     * Set haemoglobin
     *
     * @param float $haemoglobin
     *
     * @return LabRadiology
     */
    public function setHaemoglobin($haemoglobin)
    {
        $this->haemoglobin = $haemoglobin;

        return $this;
    }

    /**
     * Get haemoglobin
     *
     * @return float
     */
    public function getHaemoglobin()
    {
        return $this->haemoglobin;
    }

    /**
     * Set recticCount
     *
     * @param float $recticCount
     *
     * @return LabRadiology
     */
    public function setRecticCount($recticCount)
    {
        $this->recticCount = $recticCount;

        return $this;
    }

    /**
     * Get recticCount
     *
     * @return float
     */
    public function getRecticCount()
    {
        return $this->recticCount;
    }

    /**
     * Set meanCorpuscularVolume
     *
     * @param float $meanCorpuscularVolume
     *
     * @return LabRadiology
     */
    public function setMeanCorpuscularVolume($meanCorpuscularVolume)
    {
        $this->meanCorpuscularVolume = $meanCorpuscularVolume;

        return $this;
    }

    /**
     * Get meanCorpuscularVolume
     *
     * @return float
     */
    public function getMeanCorpuscularVolume()
    {
        return $this->meanCorpuscularVolume;
    }

    /**
     * Set haematocrit
     *
     * @param float $haematocrit
     *
     * @return LabRadiology
     */
    public function setHaematocrit($haematocrit)
    {
        $this->haematocrit = $haematocrit;

        return $this;
    }

    /**
     * Get haematocrit
     *
     * @return float
     */
    public function getHaematocrit()
    {
        return $this->haematocrit;
    }

    /**
     * Set plateletCount
     *
     * @param float $plateletCount
     *
     * @return LabRadiology
     */
    public function setPlateletCount($plateletCount)
    {
        $this->plateletCount = $plateletCount;

        return $this;
    }

    /**
     * Get plateletCount
     *
     * @return float
     */
    public function getPlateletCount()
    {
        return $this->plateletCount;
    }

    /**
     * Set creatinine
     *
     * @param float $creatinine
     *
     * @return LabRadiology
     */
    public function setCreatinine($creatinine)
    {
        $this->creatinine = $creatinine;

        return $this;
    }

    /**
     * Get creatinine
     *
     * @return float
     */
    public function getCreatinine()
    {
        return $this->creatinine;
    }

    /**
     * Set bilirubin
     *
     * @param float $bilirubin
     *
     * @return LabRadiology
     */
    public function setBilirubin($bilirubin)
    {
        $this->bilirubin = $bilirubin;

        return $this;
    }

    /**
     * Get bilirubin
     *
     * @return float
     */
    public function getBilirubin()
    {
        return $this->bilirubin;
    }

    /**
     * Set transcranialDoppler
     *
     * @param float $transcranialDoppler
     *
     * @return LabRadiology
     */
    public function setTranscranialDoppler($transcranialDoppler)
    {
        $this->transcranialDoppler = $transcranialDoppler;

        return $this;
    }

    /**
     * Get transcranialDoppler
     *
     * @return float
     */
    public function getTranscranialDoppler()
    {
        return $this->transcranialDoppler;
    }

    /**
     * Set echocardiogram
     *
     * @param float $echocardiogram
     *
     * @return LabRadiology
     */
    public function setEchocardiogram($echocardiogram)
    {
        $this->echocardiogram = $echocardiogram;

        return $this;
    }

    /**
     * Get echocardiogram
     *
     * @return float
     */
    public function getEchocardiogram()
    {
        return $this->echocardiogram;
    }

    /**
     * Set echoComments
     *
     * @param string $echoComments
     *
     * @return LabRadiology
     */
    public function setEchoComments($echoComments)
    {
        $this->echoComments = $echoComments;

        return $this;
    }

    /**
     * Get echoComments
     *
     * @return string
     */
    public function getEchoComments()
    {
        return $this->echoComments;
    }

    /**
     * Set otherTest1
     *
     * @param string $otherTest1
     *
     * @return LabRadiology
     */
    public function setOtherTest1($otherTest1)
    {
        $this->otherTest1 = $otherTest1;

        return $this;
    }

    /**
     * Get otherTest1
     *
     * @return string
     */
    public function getOtherTest1()
    {
        return $this->otherTest1;
    }

    /**
     * Set otherTest1Comments
     *
     * @param string $otherTest1Comments
     *
     * @return LabRadiology
     */
    public function setOtherTest1Comments($otherTest1Comments)
    {
        $this->otherTest1Comments = $otherTest1Comments;

        return $this;
    }

    /**
     * Get otherTest1Comments
     *
     * @return string
     */
    public function getOtherTest1Comments()
    {
        return $this->otherTest1Comments;
    }

    /**
     * Set otherTest2
     *
     * @param string $otherTest2
     *
     * @return LabRadiology
     */
    public function setOtherTest2($otherTest2)
    {
        $this->otherTest2 = $otherTest2;

        return $this;
    }

    /**
     * Get otherTest2
     *
     * @return string
     */
    public function getOtherTest2()
    {
        return $this->otherTest2;
    }

    /**
     * Set otherTest2Comments
     *
     * @param string $otherTest2Comments
     *
     * @return LabRadiology
     */
    public function setOtherTest2Comments($otherTest2Comments)
    {
        $this->otherTest2Comments = $otherTest2Comments;

        return $this;
    }

    /**
     * Get otherTest2Comments
     *
     * @return string
     */
    public function getOtherTest2Comments()
    {
        return $this->otherTest2Comments;
    }

    /**
     * Set otherTest3
     *
     * @param string $otherTest3
     *
     * @return LabRadiology
     */
    public function setOtherTest3($otherTest3)
    {
        $this->otherTest3 = $otherTest3;

        return $this;
    }

    /**
     * Get otherTest3
     *
     * @return string
     */
    public function getOtherTest3()
    {
        return $this->otherTest3;
    }

    /**
     * Set otherTest3Comments
     *
     * @param string $otherTest3Comments
     *
     * @return LabRadiology
     */
    public function setOtherTest3Comments($otherTest3Comments)
    {
        $this->otherTest3Comments = $otherTest3Comments;

        return $this;
    }

    /**
     * Get otherTest3Comments
     *
     * @return string
     */
    public function getOtherTest3Comments()
    {
        return $this->otherTest3Comments;
    }

    /**
     * Set haemoglobinComments
     *
     * @param string $haemoglobinComments
     *
     * @return LabRadiology
     */
    public function setHaemoglobinComments($haemoglobinComments)
    {
        $this->haemoglobinComments = $haemoglobinComments;

        return $this;
    }

    /**
     * Get haemoglobinComments
     *
     * @return string
     */
    public function getHaemoglobinComments()
    {
        return $this->haemoglobinComments;
    }

    /**
     * Set recticCountComments
     *
     * @param string $recticCountComments
     *
     * @return LabRadiology
     */
    public function setRecticCountComments($recticCountComments)
    {
        $this->recticCountComments = $recticCountComments;

        return $this;
    }

    /**
     * Get recticCountComments
     *
     * @return string
     */
    public function getRecticCountComments()
    {
        return $this->recticCountComments;
    }

    /**
     * Set meanCorpuscularVolumeComments
     *
     * @param string $meanCorpuscularVolumeComments
     *
     * @return LabRadiology
     */
    public function setMeanCorpuscularVolumeComments($meanCorpuscularVolumeComments)
    {
        $this->meanCorpuscularVolumeComments = $meanCorpuscularVolumeComments;

        return $this;
    }

    /**
     * Get meanCorpuscularVolumeComments
     *
     * @return string
     */
    public function getMeanCorpuscularVolumeComments()
    {
        return $this->meanCorpuscularVolumeComments;
    }

    /**
     * Set haematocritComments
     *
     * @param string $haematocritComments
     *
     * @return LabRadiology
     */
    public function setHaematocritComments($haematocritComments)
    {
        $this->haematocritComments = $haematocritComments;

        return $this;
    }

    /**
     * Get haematocritComments
     *
     * @return string
     */
    public function getHaematocritComments()
    {
        return $this->haematocritComments;
    }

    /**
     * Set plateletCountComments
     *
     * @param string $plateletCountComments
     *
     * @return LabRadiology
     */
    public function setPlateletCountComments($plateletCountComments)
    {
        $this->plateletCountComments = $plateletCountComments;

        return $this;
    }

    /**
     * Get plateletCountComments
     *
     * @return string
     */
    public function getPlateletCountComments()
    {
        return $this->plateletCountComments;
    }

    /**
     * Set creatinineComments
     *
     * @param string $creatinineComments
     *
     * @return LabRadiology
     */
    public function setCreatinineComments($creatinineComments)
    {
        $this->creatinineComments = $creatinineComments;

        return $this;
    }

    /**
     * Get creatinineComments
     *
     * @return string
     */
    public function getCreatinineComments()
    {
        return $this->creatinineComments;
    }

    /**
     * Set bilirubinCommets
     *
     * @param string $bilirubinCommets
     *
     * @return LabRadiology
     */
    public function setBilirubinCommets($bilirubinCommets)
    {
        $this->bilirubinCommets = $bilirubinCommets;

        return $this;
    }

    /**
     * Get bilirubinCommets
     *
     * @return string
     */
    public function getBilirubinCommets()
    {
        return $this->bilirubinCommets;
    }

    /**
     * Set transcranialDopplerComments
     *
     * @param string $transcranialDopplerComments
     *
     * @return LabRadiology
     */
    public function setTranscranialDopplerComments($transcranialDopplerComments)
    {
        $this->transcranialDopplerComments = $transcranialDopplerComments;

        return $this;
    }

    /**
     * Get transcranialDopplerComments
     *
     * @return string
     */
    public function getTranscranialDopplerComments()
    {
        return $this->transcranialDopplerComments;
    }

    /**
     * Set triageId
     *
     * @param integer $triageId
     *
     * @return LabRadiology
     */
    public function setTriageId($triageId)
    {
        $this->triageId = $triageId;

        return $this;
    }

    /**
     * Get triageId
     *
     * @return int
     */
    public function getTriageId()
    {
        return $this->triageId;
    }
}

