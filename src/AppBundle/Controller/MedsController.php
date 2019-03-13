<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Meds;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Med controller.
 *
 * @Route("meds")
 */
class MedsController extends Controller
{
    /**
     * Lists all med entities.
     *
     * @Route("/", name="meds_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meds = $em->getRepository('AppBundle:Meds')->findAll();

        return $this->render('meds/index.html.twig', array(
            'meds' => $meds,
        ));
    }

    /**
     * Creates a new med entity.
     *
     * @Route("/new", name="meds_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $med = new Meds();
        $form = $this->createForm('AppBundle\Form\MedsType', $med);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($med);
            $em->flush();

            return $this->redirectToRoute('meds_show', array('id' => $med->getId()));
        }

        return $this->render('meds/new.html.twig', array(
            'med' => $med,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a med entity.
     *
     * @Route("/{id}", name="meds_show")
     * @Method("GET")
     */
    public function showAction(Meds $med)
    {
        $deleteForm = $this->createDeleteForm($med);

        return $this->render('meds/show.html.twig', array(
            'med' => $med,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing med entity.
     *
     * @Route("/{id}/edit", name="meds_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Meds $med)
    {
        $deleteForm = $this->createDeleteForm($med);
        $editForm = $this->createForm('AppBundle\Form\MedsType', $med);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meds_edit', array('id' => $med->getId()));
        }

        return $this->render('meds/edit.html.twig', array(
            'med' => $med,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a med entity.
     *
     * @Route("/{id}", name="meds_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Meds $med)
    {
        $form = $this->createDeleteForm($med);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($med);
            $em->flush();
        }

        return $this->redirectToRoute('meds_index');
    }

    /**
     * Creates a form to delete a med entity.
     *
     * @param Meds $med The med entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Meds $med)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meds_delete', array('id' => $med->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
