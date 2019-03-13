<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Care;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Care controller.
 *
 * @Route("care")
 */
class CareController extends Controller
{
    /**
     * Lists all care entities.
     *
     * @Route("/", name="care_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cares = $em->getRepository('AppBundle:Care')->findAll();

        return $this->render('care/index.html.twig', array(
            'cares' => $cares,
        ));
    }

    /**
     * Creates a new care entity.
     *
     * @Route("/new", name="care_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $care = new Care();
        $form = $this->createForm('AppBundle\Form\CareType', $care);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($care);
            $em->flush();

            return $this->redirectToRoute('care_show', array('id' => $care->getId()));
        }

        return $this->render('care/new.html.twig', array(
            'care' => $care,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a care entity.
     *
     * @Route("/{id}", name="care_show")
     * @Method("GET")
     */
    public function showAction(Care $care)
    {
        $deleteForm = $this->createDeleteForm($care);

        return $this->render('care/show.html.twig', array(
            'care' => $care,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing care entity.
     *
     * @Route("/{id}/edit", name="care_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Care $care)
    {
        $deleteForm = $this->createDeleteForm($care);
        $editForm = $this->createForm('AppBundle\Form\CareType', $care);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('care_edit', array('id' => $care->getId()));
        }

        return $this->render('care/edit.html.twig', array(
            'care' => $care,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a care entity.
     *
     * @Route("/{id}", name="care_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Care $care)
    {
        $form = $this->createDeleteForm($care);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($care);
            $em->flush();
        }

        return $this->redirectToRoute('care_index');
    }

    /**
     * Creates a form to delete a care entity.
     *
     * @param Care $care The care entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Care $care)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('care_delete', array('id' => $care->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
