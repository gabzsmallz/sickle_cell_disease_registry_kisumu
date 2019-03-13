<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Conditions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Condition controller.
 *
 * @Route("conditions")
 */
class ConditionsController extends Controller
{
    /**
     * Lists all condition entities.
     *
     * @Route("/", name="conditions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conditions = $em->getRepository('AppBundle:Conditions')->findAll();

        return $this->render('conditions/index.html.twig', array(
            'conditions' => $conditions,
        ));
    }

    /**
     * Creates a new condition entity.
     *
     * @Route("/new", name="conditions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $condition = new Conditions();
        $form = $this->createForm('AppBundle\Form\ConditionsType', $condition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($condition);
            $em->flush();

            return $this->redirectToRoute('conditions_show', array('id' => $condition->getId()));
        }

        return $this->render('conditions/new.html.twig', array(
            'condition' => $condition,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a condition entity.
     *
     * @Route("/{id}", name="conditions_show")
     * @Method("GET")
     */
    public function showAction(Conditions $condition)
    {
        $deleteForm = $this->createDeleteForm($condition);

        return $this->render('conditions/show.html.twig', array(
            'condition' => $condition,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing condition entity.
     *
     * @Route("/{id}/edit", name="conditions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conditions $condition)
    {
        $deleteForm = $this->createDeleteForm($condition);
        $editForm = $this->createForm('AppBundle\Form\ConditionsType', $condition);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conditions_edit', array('id' => $condition->getId()));
        }

        return $this->render('conditions/edit.html.twig', array(
            'condition' => $condition,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a condition entity.
     *
     * @Route("/{id}", name="conditions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Conditions $condition)
    {
        $form = $this->createDeleteForm($condition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($condition);
            $em->flush();
        }

        return $this->redirectToRoute('conditions_index');
    }

    /**
     * Creates a form to delete a condition entity.
     *
     * @param Conditions $condition The condition entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conditions $condition)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conditions_delete', array('id' => $condition->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
