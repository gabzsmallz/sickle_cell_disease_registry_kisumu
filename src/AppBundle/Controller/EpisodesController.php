<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Episodes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 * @Route("episodes")
 */
class EpisodesController extends Controller
{
    /**
     * Lists all episode entities.
     *
     * @Route("/", name="episodes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('AppBundle:Episodes')->findAll();

        return $this->render('episodes/index.html.twig', array(
            'episodes' => $episodes,
        ));
    }

    /**
     * Creates a new episode entity.
     *
     * @Route("/new", name="episodes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $episode = new Episodes();
        $form = $this->createForm('AppBundle\Form\EpisodesType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('episodes_show', array('id' => $episode->getId()));
        }

        return $this->render('episodes/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a episode entity.
     *
     * @Route("/{id}", name="episodes_show")
     * @Method("GET")
     */
    public function showAction(Episodes $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('episodes/show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing episode entity.
     *
     * @Route("/{id}/edit", name="episodes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episodes $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('AppBundle\Form\EpisodesType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('episodes_edit', array('id' => $episode->getId()));
        }

        return $this->render('episodes/edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a episode entity.
     *
     * @Route("/{id}", name="episodes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episodes $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }

        return $this->redirectToRoute('episodes_index');
    }

    /**
     * Creates a form to delete a episode entity.
     *
     * @param Episodes $episode The episode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episodes $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episodes_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
