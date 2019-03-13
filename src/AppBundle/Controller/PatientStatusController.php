<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PatientStatus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Patientstatus controller.
 *
 * @Route("patientstatus")
 */
class PatientStatusController extends Controller
{
    /**
     * Lists all patientStatus entities.
     *
     * @Route("/", name="patientstatus_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $patientStatuses = $em->getRepository('AppBundle:PatientStatus')->findAll();

        return $this->render('patientstatus/index.html.twig', array(
            'patientStatuses' => $patientStatuses,
        ));
    }

    /**
     * Creates a new patientStatus entity.
     *
     * @Route("/new", name="patientstatus_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $patientStatus = new Patientstatus();
        $form = $this->createForm('AppBundle\Form\PatientStatusType', $patientStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patientStatus);
            $em->flush();

            return $this->redirectToRoute('patientstatus_show', array('id' => $patientStatus->getId()));
        }

        return $this->render('patientstatus/new.html.twig', array(
            'patientStatus' => $patientStatus,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a patientStatus entity.
     *
     * @Route("/{id}", name="patientstatus_show")
     * @Method("GET")
     */
    public function showAction(PatientStatus $patientStatus)
    {
        $deleteForm = $this->createDeleteForm($patientStatus);

        return $this->render('patientstatus/show.html.twig', array(
            'patientStatus' => $patientStatus,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing patientStatus entity.
     *
     * @Route("/{id}/edit", name="patientstatus_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PatientStatus $patientStatus)
    {
        $deleteForm = $this->createDeleteForm($patientStatus);
        $editForm = $this->createForm('AppBundle\Form\PatientStatusType', $patientStatus);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('patientstatus_edit', array('id' => $patientStatus->getId()));
        }

        return $this->render('patientstatus/edit.html.twig', array(
            'patientStatus' => $patientStatus,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a patientStatus entity.
     *
     * @Route("/{id}", name="patientstatus_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PatientStatus $patientStatus)
    {
        $form = $this->createDeleteForm($patientStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patientStatus);
            $em->flush();
        }

        return $this->redirectToRoute('patientstatus_index');
    }

    /**
     * Creates a form to delete a patientStatus entity.
     *
     * @param PatientStatus $patientStatus The patientStatus entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PatientStatus $patientStatus)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patientstatus_delete', array('id' => $patientStatus->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
