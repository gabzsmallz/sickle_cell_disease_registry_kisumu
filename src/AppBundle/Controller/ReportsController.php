<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Patient;

class ReportsController extends Controller
{
    /**
     * @Route("/Reports")
     */
    public function ReportsAction()
    {
        return $this->render('reports/reports.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/PatientsReport", name="patient_report")
     */
    public function PatientsReportAction()
    {
        $patients=$this->getDoctrine()
            ->getRepository(Patient::class)
            ->createQueryBuilder('p')
            ->select('p.gender as label, count(p.id) as y' )
            ->groupBy('p.gender')
            ->getQuery()
            ->getArrayResult();
        return $this->render('reports/patients_report.html.twig', ['patients' => json_encode($patients, JSON_NUMERIC_CHECK )]);
    }
    /**
     * @Route("/PatientsReportType", name="patient_report_type")
     */
    public function PatientsReportTypeAction()
    {
        $patients=$this->getDoctrine()
            ->getRepository(Patient::class)
            ->createQueryBuilder('p')
            ->select('p.sickle_cell_type as label, count(p.id) as y' )
            ->groupBy('p.sickle_cell_type')
            ->getQuery()
            ->getArrayResult();
        return $this->render('reports/patients_report_type.html.twig', ['patients' => json_encode($patients, JSON_NUMERIC_CHECK )]);
    }

}
