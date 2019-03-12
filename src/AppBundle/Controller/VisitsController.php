<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Visits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visit controller.
 *
 * @Route("visits")
 */
class VisitsController extends Controller
{
    /**
     * Lists all visit entities.
     *
     * @Route("/", name="visits_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visits = $em->getRepository('AppBundle:Visits')->findAll();

        return $this->render('visits/index.html.twig', array(
            'visits' => $visits,
        ));
    }

    /**
     * Creates a new visit entity.
     *
     * @Route("/new", name="visits_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visit = new Visits();
        $form = $this->createForm('AppBundle\Form\VisitsType', $visit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visit);
            $em->flush();

            return $this->redirectToRoute('visits_show', array('id' => $visit->getId()));
        }

        return $this->render('visits/new.html.twig', array(
            'visit' => $visit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visit entity.
     *
     * @Route("/{id}", name="visits_show")
     * @Method("GET")
     */
    public function showAction(Visits $visit)
    {
        $deleteForm = $this->createDeleteForm($visit);

        return $this->render('visits/show.html.twig', array(
            'visit' => $visit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visit entity.
     *
     * @Route("/{id}/edit", name="visits_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visits $visit)
    {
        $deleteForm = $this->createDeleteForm($visit);
        $editForm = $this->createForm('AppBundle\Form\VisitsType', $visit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visits_edit', array('id' => $visit->getId()));
        }

        return $this->render('visits/edit.html.twig', array(
            'visit' => $visit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visit entity.
     *
     * @Route("/{id}", name="visits_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visits $visit)
    {
        $form = $this->createDeleteForm($visit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visit);
            $em->flush();
        }

        return $this->redirectToRoute('visits_index');
    }

    /**
     * Creates a form to delete a visit entity.
     *
     * @param Visits $visit The visit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visits $visit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visits_delete', array('id' => $visit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
