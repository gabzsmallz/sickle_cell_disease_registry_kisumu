<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PatientRepository extends EntityRepository
{
	public function findAllOrderByName()
	{
		return $this->getEntityManager()
			->createQuery(
				'Select p from AppBundle:Patient p order by p.name ASC'
			)
			->getResult();
	}
}