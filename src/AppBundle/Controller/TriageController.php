<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Triage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Triage controller.
 *
 * @Route("triage")
 */
class TriageController extends Controller
{
    /**
     * Lists all triage entities.
     *
     * @Route("/", name="triage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $triages = $em->getRepository('AppBundle:Triage')->findAll();

        return $this->render('triage/index.html.twig', array(
            'triages' => $triages,
        ));
    }

    /**
     * Creates a new triage entity.
     *
     * @Route("/new", name="triage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $triage = new Triage();
        $form = $this->createForm('AppBundle\Form\TriageType', $triage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($triage);
            $em->flush();

            return $this->redirectToRoute('triage_show', array('id' => $triage->getId()));
        }

        return $this->render('triage/new.html.twig', array(
            'triage' => $triage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a triage entity.
     *
     * @Route("/{id}", name="triage_show")
     * @Method("GET")
     */
    public function showAction(Triage $triage)
    {
        $deleteForm = $this->createDeleteForm($triage);

        return $this->render('triage/show.html.twig', array(
            'triage' => $triage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing triage entity.
     *
     * @Route("/{id}/edit", name="triage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Triage $triage)
    {
        $deleteForm = $this->createDeleteForm($triage);
        $editForm = $this->createForm('AppBundle\Form\TriageType', $triage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('triage_edit', array('id' => $triage->getId()));
        }

        return $this->render('triage/edit.html.twig', array(
            'triage' => $triage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a triage entity.
     *
     * @Route("/{id}", name="triage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Triage $triage)
    {
        $form = $this->createDeleteForm($triage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($triage);
            $em->flush();
        }

        return $this->redirectToRoute('triage_index');
    }

    /**
     * Creates a form to delete a triage entity.
     *
     * @param Triage $triage The triage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Triage $triage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('triage_delete', array('id' => $triage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
