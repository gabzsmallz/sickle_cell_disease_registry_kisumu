<?php

namespace AppBundle\Controller;

use AppBundle\Entity\GeneticCounselling;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Geneticcounselling controller.
 *
 * @Route("geneticcounselling")
 */
class GeneticCounsellingController extends Controller
{
    /**
     * Lists all geneticCounselling entities.
     *
     * @Route("/", name="geneticcounselling_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $geneticCounsellings = $em->getRepository('AppBundle:GeneticCounselling')->findAll();

        return $this->render('geneticcounselling/index.html.twig', array(
            'geneticCounsellings' => $geneticCounsellings,
        ));
    }

    /**
     * Creates a new geneticCounselling entity.
     *
     * @Route("/new", name="geneticcounselling_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $geneticCounselling = new Geneticcounselling();
        $form = $this->createForm('AppBundle\Form\GeneticCounsellingType', $geneticCounselling);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($geneticCounselling);
            $em->flush();

            return $this->redirectToRoute('geneticcounselling_show', array('id' => $geneticCounselling->getId()));
        }

        return $this->render('geneticcounselling/new.html.twig', array(
            'geneticCounselling' => $geneticCounselling,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a geneticCounselling entity.
     *
     * @Route("/{id}", name="geneticcounselling_show")
     * @Method("GET")
     */
    public function showAction(GeneticCounselling $geneticCounselling)
    {
        $deleteForm = $this->createDeleteForm($geneticCounselling);

        return $this->render('geneticcounselling/show.html.twig', array(
            'geneticCounselling' => $geneticCounselling,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing geneticCounselling entity.
     *
     * @Route("/{id}/edit", name="geneticcounselling_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GeneticCounselling $geneticCounselling)
    {
        $deleteForm = $this->createDeleteForm($geneticCounselling);
        $editForm = $this->createForm('AppBundle\Form\GeneticCounsellingType', $geneticCounselling);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('geneticcounselling_edit', array('id' => $geneticCounselling->getId()));
        }

        return $this->render('geneticcounselling/edit.html.twig', array(
            'geneticCounselling' => $geneticCounselling,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a geneticCounselling entity.
     *
     * @Route("/{id}", name="geneticcounselling_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GeneticCounselling $geneticCounselling)
    {
        $form = $this->createDeleteForm($geneticCounselling);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($geneticCounselling);
            $em->flush();
        }

        return $this->redirectToRoute('geneticcounselling_index');
    }

    /**
     * Creates a form to delete a geneticCounselling entity.
     *
     * @param GeneticCounselling $geneticCounselling The geneticCounselling entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GeneticCounselling $geneticCounselling)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('geneticcounselling_delete', array('id' => $geneticCounselling->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
