<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Events;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Event controller.
 *
 * @Route("events")
 */
class EventsController extends Controller
{
    /**
     * Lists all event entities.
     *
     * @Route("/cat/{category_id}", name="events_index")
     * @Method("GET")
     */
    public function indexAction($category_id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('HomeBundle:Category')->find($category_id);
        // 404
        // verifier si cat exist   //
        if (!$category) {  throw $this->createNotFoundException( 'No product found for id ' . $category_id );}

        // tous les events qui ont cette cat

        $events = $em->getRepository('HomeBundle:Events')->eventFromThisCategory($category_id);

        return $this->render('events/index.html.twig', array(
            'events' => $events,
            'category_id' => $category->getId()
        ));
    }

    /**
     * Creates a new event entity.
     *
     * @Route("/new", name="events_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $events = new Events();
        $form = $this->createForm('HomeBundle\Form\EventsType', $events);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $user = $this->getUser();
            $events->setUser($user);
            $events->setStatus(0);
            $em->persist($events);
            $em->flush();

            // message flash
            $this->addFlash(
                'notice',
                'Votre demande va être traitée'
            );

            // redirection page profil
            return $this->redirectToRoute('home_homepage');

        }

        return $this->render('events/new.html.twig', array(
            'events' => $events,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a event entity.
     *
     * @Route("/{id}", name="events_show")
     * @Method("GET")
     */
    public function showAction(Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);

        return $this->render('events/show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing event entity.
     *
     * @Route("/{id}/edit", name="events_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('HomeBundle\Form\EventsType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('events_show', array('id' => $event->getId()));

        }

        return $this->render('events/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Deletes a event entity.
     *
     * @Route("/{id}", name="events_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Events $event, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('HomeBundle:Category')->findBy(['id'=>$id]);

        $events = $em->getRepository('HomeBundle:Events')->deleteEventsForThisCategory($id);

        // $form = $this->createDeleteForm($event);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $em = $this->getDoctrine()->getManager();
        //     $em->remove($event);
        //     $em->flush();
        // }

        return $this->redirectToRoute('events_index', array(
            'category_id' => $category->getId()
        ));
    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Events $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Events $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('events_delete', array('id' => $event->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
