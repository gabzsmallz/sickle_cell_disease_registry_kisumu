<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Referrals;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Referral controller.
 *
 * @Route("referrals")
 */
class ReferralsController extends Controller
{
    /**
     * Lists all referral entities.
     *
     * @Route("/", name="referrals_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $referrals = $em->getRepository('AppBundle:Referrals')->findAll();

        return $this->render('referrals/index.html.twig', array(
            'referrals' => $referrals,
        ));
    }

    /**
     * Creates a new referral entity.
     *
     * @Route("/new", name="referrals_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $referral = new Referrals();
        $form = $this->createForm('AppBundle\Form\ReferralsType', $referral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($referral);
            $em->flush();

            return $this->redirectToRoute('referrals_show', array('id' => $referral->getId()));
        }

        return $this->render('referrals/new.html.twig', array(
            'referral' => $referral,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a referral entity.
     *
     * @Route("/{id}", name="referrals_show")
     * @Method("GET")
     */
    public function showAction(Referrals $referral)
    {
        $deleteForm = $this->createDeleteForm($referral);

        return $this->render('referrals/show.html.twig', array(
            'referral' => $referral,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing referral entity.
     *
     * @Route("/{id}/edit", name="referrals_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Referrals $referral)
    {
        $deleteForm = $this->createDeleteForm($referral);
        $editForm = $this->createForm('AppBundle\Form\ReferralsType', $referral);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('referrals_edit', array('id' => $referral->getId()));
        }

        return $this->render('referrals/edit.html.twig', array(
            'referral' => $referral,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a referral entity.
     *
     * @Route("/{id}", name="referrals_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Referrals $referral)
    {
        $form = $this->createDeleteForm($referral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($referral);
            $em->flush();
        }

        return $this->redirectToRoute('referrals_index');
    }

    /**
     * Creates a form to delete a referral entity.
     *
     * @param Referrals $referral The referral entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Referrals $referral)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referrals_delete', array('id' => $referral->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
