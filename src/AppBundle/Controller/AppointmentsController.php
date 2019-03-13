<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Appointments;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Appointment controller.
 *
 * @Route("appointments")
 */
class AppointmentsController extends Controller
{
    /**
     * Lists all appointment entities.
     *
     * @Route("/", name="appointments_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appointments = $em->getRepository('AppBundle:Appointments')->findAll();

        return $this->render('appointments/index.html.twig', array(
            'appointments' => $appointments,
        ));
    }

    /**
     * Creates a new appointment entity.
     *
     * @Route("/new", name="appointments_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $appointment = new Appointments();
        $form = $this->createForm('AppBundle\Form\AppointmentsType', $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appointment);
            $em->flush();

            return $this->redirectToRoute('appointments_show', array('id' => $appointment->getId()));
        }

        return $this->render('appointments/new.html.twig', array(
            'appointment' => $appointment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a appointment entity.
     *
     * @Route("/{id}", name="appointments_show")
     * @Method("GET")
     */
    public function showAction(Appointments $appointment)
    {
        $deleteForm = $this->createDeleteForm($appointment);

        return $this->render('appointments/show.html.twig', array(
            'appointment' => $appointment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appointment entity.
     *
     * @Route("/{id}/edit", name="appointments_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Appointments $appointment)
    {
        $deleteForm = $this->createDeleteForm($appointment);
        $editForm = $this->createForm('AppBundle\Form\AppointmentsType', $appointment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appointments_edit', array('id' => $appointment->getId()));
        }

        return $this->render('appointments/edit.html.twig', array(
            'appointment' => $appointment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appointment entity.
     *
     * @Route("/{id}", name="appointments_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Appointments $appointment)
    {
        $form = $this->createDeleteForm($appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appointment);
            $em->flush();
        }

        return $this->redirectToRoute('appointments_index');
    }

    /**
     * Creates a form to delete a appointment entity.
     *
     * @param Appointments $appointment The appointment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appointments $appointment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appointments_delete', array('id' => $appointment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
