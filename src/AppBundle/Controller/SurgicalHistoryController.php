<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SurgicalHistory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Surgicalhistory controller.
 *
 * @Route("surgicalhistory")
 */
class SurgicalHistoryController extends Controller
{
    /**
     * Lists all surgicalHistory entities.
     *
     * @Route("/", name="surgicalhistory_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $surgicalHistories = $em->getRepository('AppBundle:SurgicalHistory')->findAll();

        return $this->render('surgicalhistory/index.html.twig', array(
            'surgicalHistories' => $surgicalHistories,
        ));
    }

    /**
     * Creates a new surgicalHistory entity.
     *
     * @Route("/new", name="surgicalhistory_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $surgicalHistory = new Surgicalhistory();
        $form = $this->createForm('AppBundle\Form\SurgicalHistoryType', $surgicalHistory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($surgicalHistory);
            $em->flush();

            return $this->redirectToRoute('surgicalhistory_show', array('id' => $surgicalHistory->getId()));
        }

        return $this->render('surgicalhistory/new.html.twig', array(
            'surgicalHistory' => $surgicalHistory,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a surgicalHistory entity.
     *
     * @Route("/{id}", name="surgicalhistory_show")
     * @Method("GET")
     */
    public function showAction(SurgicalHistory $surgicalHistory)
    {
        $deleteForm = $this->createDeleteForm($surgicalHistory);

        return $this->render('surgicalhistory/show.html.twig', array(
            'surgicalHistory' => $surgicalHistory,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing surgicalHistory entity.
     *
     * @Route("/{id}/edit", name="surgicalhistory_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SurgicalHistory $surgicalHistory)
    {
        $deleteForm = $this->createDeleteForm($surgicalHistory);
        $editForm = $this->createForm('AppBundle\Form\SurgicalHistoryType', $surgicalHistory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('surgicalhistory_edit', array('id' => $surgicalHistory->getId()));
        }

        return $this->render('surgicalhistory/edit.html.twig', array(
            'surgicalHistory' => $surgicalHistory,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a surgicalHistory entity.
     *
     * @Route("/{id}", name="surgicalhistory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SurgicalHistory $surgicalHistory)
    {
        $form = $this->createDeleteForm($surgicalHistory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($surgicalHistory);
            $em->flush();
        }

        return $this->redirectToRoute('surgicalhistory_index');
    }

    /**
     * Creates a form to delete a surgicalHistory entity.
     *
     * @param SurgicalHistory $surgicalHistory The surgicalHistory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SurgicalHistory $surgicalHistory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('surgicalhistory_delete', array('id' => $surgicalHistory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
