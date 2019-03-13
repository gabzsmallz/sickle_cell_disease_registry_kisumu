<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episodes
 *
 * @ORM\Table(name="episodes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodesRepository")
 */
class Episodes
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
     * @ORM\Column(name="episode_type_1", type="string", length=255)
     */
    private $episodeType1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_1_date", type="datetime")
     */
    private $episodeType1Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_1_comments", type="string", length=255)
     */
    private $episodeType1Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_2", type="string", length=255, nullable=true)
     */
    private $episodeType2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_2_date", type="datetime", nullable=true)
     */
    private $episodeType2Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_2_comments", type="string", length=255, nullable=true)
     */
    private $episodeType2Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_3", type="string", length=255, nullable=true)
     */
    private $episodeType3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_3_date", type="datetime")
     */
    private $episodeType3Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_3_comments", type="string", length=255, nullable=true)
     */
    private $episodeType3Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_4", type="string", length=255, nullable=true)
     */
    private $episodeType4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_4_date", type="datetime", nullable=true)
     */
    private $episodeType4Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_4_comments", type="string", length=255, nullable=true)
     */
    private $episodeType4Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_5", type="string", length=255, nullable=true)
     */
    private $episodeType5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_5_date", type="datetime", nullable=true)
     */
    private $episodeType5Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_5_comments", type="string", length=255, nullable=true)
     */
    private $episodeType5Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_6", type="string", length=255, nullable=true)
     */
    private $episodeType6;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_6_date", type="datetime", nullable=true)
     */
    private $episodeType6Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_6_comments", type="string", length=255, nullable=true)
     */
    private $episodeType6Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_7", type="string", length=255, nullable=true)
     */
    private $episodeType7;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_7_date", type="datetime", nullable=true)
     */
    private $episodeType7Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_7_comments", type="string", length=255, nullable=true)
     */
    private $episodeType7Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_8", type="string", length=255, nullable=true)
     */
    private $episodeType8;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_8_date", type="datetime", nullable=true)
     */
    private $episodeType8Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_8_comments", type="string", length=255)
     */
    private $episodeType8Comments;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_9", type="string", length=255, nullable=true)
     */
    private $episodeType9;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="episode_type_9_date", type="datetime", nullable=true)
     */
    private $episodeType9Date;

    /**
     * @var string
     *
     * @ORM\Column(name="episode_type_9_comments", type="string", length=255, nullable=true)
     */
    private $episodeType9Comments;

    /**
     * @var int
     *
     * @ORM\Column(name="patient_id", type="integer")
     *  @ORM\ManyToOne(targetEntity="Patient", inversedBy="episodes")
     *  @ORM\JoinColumn(name="patient_id", referencedColumnName="id" )
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
     * Set episodeType1
     *
     * @param string $episodeType1
     *
     * @return Episodes
     */
    public function setEpisodeType1($episodeType1)
    {
        $this->episodeType1 = $episodeType1;

        return $this;
    }

    /**
     * Get episodeType1
     *
     * @return string
     */
    public function getEpisodeType1()
    {
        return $this->episodeType1;
    }

    /**
     * Set episodeType1Date
     *
     * @param \DateTime $episodeType1Date
     *
     * @return Episodes
     */
    public function setEpisodeType1Date($episodeType1Date)
    {
        $this->episodeType1Date = $episodeType1Date;

        return $this;
    }

    /**
     * Get episodeType1Date
     *
     * @return \DateTime
     */
    public function getEpisodeType1Date()
    {
        return $this->episodeType1Date;
    }

    /**
     * Set episodeType1Comments
     *
     * @param string $episodeType1Comments
     *
     * @return Episodes
     */
    public function setEpisodeType1Comments($episodeType1Comments)
    {
        $this->episodeType1Comments = $episodeType1Comments;

        return $this;
    }

    /**
     * Get episodeType1Comments
     *
     * @return string
     */
    public function getEpisodeType1Comments()
    {
        return $this->episodeType1Comments;
    }

    /**
     * Set episodeType2
     *
     * @param string $episodeType2
     *
     * @return Episodes
     */
    public function setEpisodeType2($episodeType2)
    {
        $this->episodeType2 = $episodeType2;

        return $this;
    }

    /**
     * Get episodeType2
     *
     * @return string
     */
    public function getEpisodeType2()
    {
        return $this->episodeType2;
    }

    /**
     * Set episodeType2Date
     *
     * @param \DateTime $episodeType2Date
     *
     * @return Episodes
     */
    public function setEpisodeType2Date($episodeType2Date)
    {
        $this->episodeType2Date = $episodeType2Date;

        return $this;
    }

    /**
     * Get episodeType2Date
     *
     * @return \DateTime
     */
    public function getEpisodeType2Date()
    {
        return $this->episodeType2Date;
    }

    /**
     * Set episodeType2Comments
     *
     * @param string $episodeType2Comments
     *
     * @return Episodes
     */
    public function setEpisodeType2Comments($episodeType2Comments)
    {
        $this->episodeType2Comments = $episodeType2Comments;

        return $this;
    }

    /**
     * Get episodeType2Comments
     *
     * @return string
     */
    public function getEpisodeType2Comments()
    {
        return $this->episodeType2Comments;
    }

    /**
     * Set episodeType3
     *
     * @param string $episodeType3
     *
     * @return Episodes
     */
    public function setEpisodeType3($episodeType3)
    {
        $this->episodeType3 = $episodeType3;

        return $this;
    }

    /**
     * Get episodeType3
     *
     * @return string
     */
    public function getEpisodeType3()
    {
        return $this->episodeType3;
    }

    /**
     * Set episodeType3Date
     *
     * @param \DateTime $episodeType3Date
     *
     * @return Episodes
     */
    public function setEpisodeType3Date($episodeType3Date)
    {
        $this->episodeType3Date = $episodeType3Date;

        return $this;
    }

    /**
     * Get episodeType3Date
     *
     * @return \DateTime
     */
    public function getEpisodeType3Date()
    {
        return $this->episodeType3Date;
    }

    /**
     * Set episodeType3Comments
     *
     * @param string $episodeType3Comments
     *
     * @return Episodes
     */
    public function setEpisodeType3Comments($episodeType3Comments)
    {
        $this->episodeType3Comments = $episodeType3Comments;

        return $this;
    }

    /**
     * Get episodeType3Comments
     *
     * @return string
     */
    public function getEpisodeType3Comments()
    {
        return $this->episodeType3Comments;
    }

    /**
     * Set episodeType4
     *
     * @param string $episodeType4
     *
     * @return Episodes
     */
    public function setEpisodeType4($episodeType4)
    {
        $this->episodeType4 = $episodeType4;

        return $this;
    }

    /**
     * Get episodeType4
     *
     * @return string
     */
    public function getEpisodeType4()
    {
        return $this->episodeType4;
    }

    /**
     * Set episodeType4Date
     *
     * @param \DateTime $episodeType4Date
     *
     * @return Episodes
     */
    public function setEpisodeType4Date($episodeType4Date)
    {
        $this->episodeType4Date = $episodeType4Date;

        return $this;
    }

    /**
     * Get episodeType4Date
     *
     * @return \DateTime
     */
    public function getEpisodeType4Date()
    {
        return $this->episodeType4Date;
    }

    /**
     * Set episodeType4Comments
     *
     * @param string $episodeType4Comments
     *
     * @return Episodes
     */
    public function setEpisodeType4Comments($episodeType4Comments)
    {
        $this->episodeType4Comments = $episodeType4Comments;

        return $this;
    }

    /**
     * Get episodeType4Comments
     *
     * @return string
     */
    public function getEpisodeType4Comments()
    {
        return $this->episodeType4Comments;
    }

    /**
     * Set episodeType5
     *
     * @param string $episodeType5
     *
     * @return Episodes
     */
    public function setEpisodeType5($episodeType5)
    {
        $this->episodeType5 = $episodeType5;

        return $this;
    }

    /**
     * Get episodeType5
     *
     * @return string
     */
    public function getEpisodeType5()
    {
        return $this->episodeType5;
    }

    /**
     * Set episodeType5Date
     *
     * @param \DateTime $episodeType5Date
     *
     * @return Episodes
     */
    public function setEpisodeType5Date($episodeType5Date)
    {
        $this->episodeType5Date = $episodeType5Date;

        return $this;
    }

    /**
     * Get episodeType5Date
     *
     * @return \DateTime
     */
    public function getEpisodeType5Date()
    {
        return $this->episodeType5Date;
    }

    /**
     * Set episodeType5Comments
     *
     * @param string $episodeType5Comments
     *
     * @return Episodes
     */
    public function setEpisodeType5Comments($episodeType5Comments)
    {
        $this->episodeType5Comments = $episodeType5Comments;

        return $this;
    }

    /**
     * Get episodeType5Comments
     *
     * @return string
     */
    public function getEpisodeType5Comments()
    {
        return $this->episodeType5Comments;
    }

    /**
     * Set episodeType6
     *
     * @param string $episodeType6
     *
     * @return Episodes
     */
    public function setEpisodeType6($episodeType6)
    {
        $this->episodeType6 = $episodeType6;

        return $this;
    }

    /**
     * Get episodeType6
     *
     * @return string
     */
    public function getEpisodeType6()
    {
        return $this->episodeType6;
    }

    /**
     * Set episodeType6Date
     *
     * @param \DateTime $episodeType6Date
     *
     * @return Episodes
     */
    public function setEpisodeType6Date($episodeType6Date)
    {
        $this->episodeType6Date = $episodeType6Date;

        return $this;
    }

    /**
     * Get episodeType6Date
     *
     * @return \DateTime
     */
    public function getEpisodeType6Date()
    {
        return $this->episodeType6Date;
    }

    /**
     * Set episodeType6Comments
     *
     * @param string $episodeType6Comments
     *
     * @return Episodes
     */
    public function setEpisodeType6Comments($episodeType6Comments)
    {
        $this->episodeType6Comments = $episodeType6Comments;

        return $this;
    }

    /**
     * Get episodeType6Comments
     *
     * @return string
     */
    public function getEpisodeType6Comments()
    {
        return $this->episodeType6Comments;
    }

    /**
     * Set episodeType7
     *
     * @param string $episodeType7
     *
     * @return Episodes
     */
    public function setEpisodeType7($episodeType7)
    {
        $this->episodeType7 = $episodeType7;

        return $this;
    }

    /**
     * Get episodeType7
     *
     * @return string
     */
    public function getEpisodeType7()
    {
        return $this->episodeType7;
    }

    /**
     * Set episodeType7Date
     *
     * @param \DateTime $episodeType7Date
     *
     * @return Episodes
     */
    public function setEpisodeType7Date($episodeType7Date)
    {
        $this->episodeType7Date = $episodeType7Date;

        return $this;
    }

    /**
     * Get episodeType7Date
     *
     * @return \DateTime
     */
    public function getEpisodeType7Date()
    {
        return $this->episodeType7Date;
    }

    /**
     * Set episodeType7Comments
     *
     * @param string $episodeType7Comments
     *
     * @return Episodes
     */
    public function setEpisodeType7Comments($episodeType7Comments)
    {
        $this->episodeType7Comments = $episodeType7Comments;

        return $this;
    }

    /**
     * Get episodeType7Comments
     *
     * @return string
     */
    public function getEpisodeType7Comments()
    {
        return $this->episodeType7Comments;
    }

    /**
     * Set episodeType8
     *
     * @param string $episodeType8
     *
     * @return Episodes
     */
    public function setEpisodeType8($episodeType8)
    {
        $this->episodeType8 = $episodeType8;

        return $this;
    }

    /**
     * Get episodeType8
     *
     * @return string
     */
    public function getEpisodeType8()
    {
        return $this->episodeType8;
    }

    /**
     * Set episodeType8Date
     *
     * @param \DateTime $episodeType8Date
     *
     * @return Episodes
     */
    public function setEpisodeType8Date($episodeType8Date)
    {
        $this->episodeType8Date = $episodeType8Date;

        return $this;
    }

    /**
     * Get episodeType8Date
     *
     * @return \DateTime
     */
    public function getEpisodeType8Date()
    {
        return $this->episodeType8Date;
    }

    /**
     * Set episodeType8Comments
     *
     * @param string $episodeType8Comments
     *
     * @return Episodes
     */
    public function setEpisodeType8Comments($episodeType8Comments)
    {
        $this->episodeType8Comments = $episodeType8Comments;

        return $this;
    }

    /**
     * Get episodeType8Comments
     *
     * @return string
     */
    public function getEpisodeType8Comments()
    {
        return $this->episodeType8Comments;
    }

    /**
     * Set episodeType9
     *
     * @param string $episodeType9
     *
     * @return Episodes
     */
    public function setEpisodeType9($episodeType9)
    {
        $this->episodeType9 = $episodeType9;

        return $this;
    }

    /**
     * Get episodeType9
     *
     * @return string
     */
    public function getEpisodeType9()
    {
        return $this->episodeType9;
    }

    /**
     * Set episodeType9Date
     *
     * @param \DateTime $episodeType9Date
     *
     * @return Episodes
     */
    public function setEpisodeType9Date($episodeType9Date)
    {
        $this->episodeType9Date = $episodeType9Date;

        return $this;
    }

    /**
     * Get episodeType9Date
     *
     * @return \DateTime
     */
    public function getEpisodeType9Date()
    {
        return $this->episodeType9Date;
    }

    /**
     * Set episodeType9Comments
     *
     * @param string $episodeType9Comments
     *
     * @return Episodes
     */
    public function setEpisodeType9Comments($episodeType9Comments)
    {
        $this->episodeType9Comments = $episodeType9Comments;

        return $this;
    }

    /**
     * Get episodeType9Comments
     *
     * @return string
     */
    public function getEpisodeType9Comments()
    {
        return $this->episodeType9Comments;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return Episodes
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

