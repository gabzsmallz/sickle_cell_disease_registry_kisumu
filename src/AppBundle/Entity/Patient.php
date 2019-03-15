<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
*	@ORM\Entity(repositoryClass="AppBundle\Repository\PatientRepository")
*/
class Patient
{
	/**
	*	@ORM\Column(type="integer")
	*	@ORM\Id
	*	@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	/**
	*	@ORM\Column(type="string", length=100)
	*	@Assert\NotBlank
	*/
	protected $name;
	/**
	*	@ORM\Column(type="integer", length=3)
	*	@Assert\NotBlank
	*/
	protected $age;
	/**
	*	@ORM\Column(type="string", length=1)
	*	@Assert\NotBlank
	*/
	protected $gender;
	/**
	*	@ORM\Column(type="string", length=1)
	*	@Assert\NotBlank
	*/
	protected $martial_status;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $county_of_origin;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $sub_county_of_origin;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $residence;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $contact;
	/**
	*	@ORM\Column(type="integer")
	*	@Assert\NotBlank
	*/
	protected $no_of_siblings;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $registration_no;
	/**
	*	@ORM\Column(type="datetime")
	*	@Assert\NotBlank
	*	@Assert\Type("\DateTime")
	*/
	protected $dateOfDiagnosis;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $sickle_cell_type;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $contact_person;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $contact_person_no;
	/**
	*	@ORM\Column(type="string")
	*	@Assert\NotBlank
	*/
	protected $contact_person_relation;
	/**
	*	@ORM\Column(type="integer")
	*	@Assert\NotBlank
	*/
	protected $is_active;
	/**
	*	@ORM\OneToMany(targetEntity="Visits", mappedBy="patient_id")
	*/
	protected $visits;
	/**
	*	@ORM\OneToMany(targetEntity="Appointments", mappedBy="patient_id")
	*/
	protected $appointments;
	/**
	*	@ORM\OneToMany(targetEntity="Care", mappedBy="patient_id")
	*/
	protected $cares;
	/**
	*	@ORM\OneToMany(targetEntity="Conditions", mappedBy="patient_id")
	*/
	protected $conditions;
	/**
	*	@ORM\OneToMany(targetEntity="Episodes", mappedBy="patient_id")
	*/
	protected $episodes;
	/**
	*	@ORM\OneToMany(targetEntity="GeneticCounselling", mappedBy="patient_id")
	*/
	protected $consellings;
	/**
	*	@ORM\OneToMany(targetEntity="PatientStatus", mappedBy="patientId")
	*/
	protected $patientstatus;
	/**
	*	@ORM\OneToMany(targetEntity="Referrals", mappedBy="patientId")
	*/
	protected $referrals;
	/**
	*	@ORM\OneToMany(targetEntity="SurgicalHistory", mappedBy="patientId")
	*/
	protected $surgeries;

	public function __construct()
	{
		$this->visits = new ArrayCollection();
		$this->appointments = new ArrayCollection();
		$this->cares = new ArrayCollection();
		$this->episodes = new ArrayCollection();
		$this->consellings = new ArrayCollection();
		$this->patientstatus = new ArrayCollection();
		$this->referrals = new ArrayCollection();
		$this->conditions = new ArrayCollection();
		$this->surgeries = new ArrayCollection();
	}

	public function getPatient()
	{
		return $this->getName().' : '.$this->getRegistrationNo();
	}
	public function __toString()
	{
		return $this->getName().' : '.$this->getRegistrationNo();
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id=$id;
	}
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name=$name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		$this->age=$age;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setGender($gender)
	{
		$this->gender=$gender;
	}
	public function getMartialStatus()
	{
		return $this->martial_status;
	}

	public function setMartialStatus($martial_status)
	{
		$this->martial_status=$martial_status;
	}
	public function getCountyOfOrigin()
	{
		return $this->county_of_origin;
	}

	public function setCountyOfOrigin($county_of_origin)
	{
		$this->county_of_origin=$county_of_origin;
	}
	public function getSubCountyOfOrigin()
	{
		return $this->sub_county_of_origin;
	}

	public function setSubCountyOfOrigin($sub_county_of_origin)
	{
		$this->sub_county_of_origin=$sub_county_of_origin;
	}
	public function getResidence()
	{
		return $this->sub_county_of_origin;
	}

	public function setResidence($residence)
	{
		$this->residence=$residence;
	}
	public function getContact()
	{
		return $this->contact;
	}

	public function setContact($contact)
	{
		$this->contact=$contact;
	}
	public function getNoOfSiblings()
	{
		return $this->no_of_siblings;
	}

	public function setNoOfSiblings($no_of_siblings)
	{
		$this->no_of_siblings=$no_of_siblings;
	}
	public function getRegistrationNo()
	{
		return $this->registration_no;
	}

	public function setRegistrationNo($registration_no)
	{
		$this->registration_no=$registration_no;
	}

	public function getDateOfDiagnosis()
	{
		return $this->dateOfDiagnosis;
	}

	public function setDateOfDiagnosis(\DateTime $dateOfDiagnosis=null)
	{
		$this->dateOfDiagnosis=$dateOfDiagnosis;
	}
	public function getSickleCellType()
	{
		return $this->sickle_cell_type;
	}

	public function setSickleCellType($sickle_cell_type)
	{
		$this->sickle_cell_type=$sickle_cell_type;
	}	
	public function getContactPerson()
	{
		return $this->contact_person;
	}

	public function setContactPerson($contact_person)
	{
		$this->contact_person=$contact_person;
	}
	public function getContactPersonNo()
	{
		return $this->contact_person_no;
	}

	public function setContactPersonNo($contact_person_no)
	{
		$this->contact_person_no=$contact_person_no;
	}	
	public function getContactPersonRelation()
	{
		return $this->contact_person_relation;
	}

	public function setContactPersonRelation($contact_person_relation)
	{
		$this->contact_person_relation=$contact_person_relation;
	}
	public function getIsActive()
	{
		return $this->is_active;
	}

	public function setIsActive($is_active)
	{
		$this->is_active=$is_active;
	}
}