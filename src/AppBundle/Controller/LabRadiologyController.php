<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LabRadiology;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Labradiology controller.
 *
 * @Route("labradiology")
 */
class LabRadiologyController extends Controller
{
    /**
     * Lists all labRadiology entities.
     *
     * @Route("/", name="labradiology_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $labRadiologies = $em->getRepository('AppBundle:LabRadiology')->findAll();

        return $this->render('labradiology/index.html.twig', array(
            'labRadiologies' => $labRadiologies,
        ));
    }

    /**
     * Creates a new labRadiology entity.
     *
     * @Route("/new", name="labradiology_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $labRadiology = new Labradiology();
        $form = $this->createForm('AppBundle\Form\LabRadiologyType', $labRadiology);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($labRadiology);
            $em->flush();

            return $this->redirectToRoute('labradiology_show', array('id' => $labRadiology->getId()));
        }

        return $this->render('labradiology/new.html.twig', array(
            'labRadiology' => $labRadiology,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a labRadiology entity.
     *
     * @Route("/{id}", name="labradiology_show")
     * @Method("GET")
     */
    public function showAction(LabRadiology $labRadiology)
    {
        $deleteForm = $this->createDeleteForm($labRadiology);

        return $this->render('labradiology/show.html.twig', array(
            'labRadiology' => $labRadiology,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing labRadiology entity.
     *
     * @Route("/{id}/edit", name="labradiology_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, LabRadiology $labRadiology)
    {
        $deleteForm = $this->createDeleteForm($labRadiology);
        $editForm = $this->createForm('AppBundle\Form\LabRadiologyType', $labRadiology);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('labradiology_edit', array('id' => $labRadiology->getId()));
        }

        return $this->render('labradiology/edit.html.twig', array(
            'labRadiology' => $labRadiology,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a labRadiology entity.
     *
     * @Route("/{id}", name="labradiology_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, LabRadiology $labRadiology)
    {
        $form = $this->createDeleteForm($labRadiology);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($labRadiology);
            $em->flush();
        }

        return $this->redirectToRoute('labradiology_index');
    }

    /**
     * Creates a form to delete a labRadiology entity.
     *
     * @param LabRadiology $labRadiology The labRadiology entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LabRadiology $labRadiology)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('labradiology_delete', array('id' => $labRadiology->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
