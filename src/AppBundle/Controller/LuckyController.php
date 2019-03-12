<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Patient;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\PatientType;
use Doctrine\ORM\EntityManagerInterface;

class LuckyController extends Controller
{
	/**
	*	@Route(
	*		"/luck/number/{max}", 
	*		name="luck_no",
	*		requirements={
	*			"max": "\d+"
	*		}
	*	)
	*/
	public function numberAction($max)
	{
		$number=random_int(0,$max);
		
		/*return new Response(
			'<html><body>Luck {**) number is: '.$number.'</body></html>'
		);*/
		return $this->render('lucky/number.html.twig',[
			'number' => $number,
		]);
	}
}