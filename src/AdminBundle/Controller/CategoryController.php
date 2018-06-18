<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use HomeBundle\Entity\Category;
use HomeBundle\Entity\Events;

use AdminBundle\Form\CategoryType;
use HomeBundle\Form\EventsType;

use \DateTime;

class CategoryController extends Controller
{
    public function parksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category_id = 3;
        $parks = $em->getRepository(Events::class)->eventFromThisCategoryAdmin($category_id);
        $countparks = $em->getRepository(Events::class)->countAllEventsForThisCategory($category_id);

        return $this->render('AdminBundle:Default:parks.html.twig', array(
          'parks' => $parks,
          'countparks' =>  $countparks
        ));
    }

    public function eventsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $category_id = 2;
      $events = $em->getRepository(Events::class)->eventFromThisCategoryAdmin($category_id);
      $countevents = $em->getRepository(Events::class)->countAllEventsForThisCategory($category_id);

      return $this->render('AdminBundle:Default:events.html.twig', array(
        'events' => $events,
        'countevents' =>  $countevents
      ));
    }

    public function monumentsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $category_id = 4;
      $monuments = $em->getRepository(Events::class)->eventFromThisCategoryAdmin($category_id);
      $countmonuments = $em->getRepository(Events::class)->countAllEventsForThisCategory($category_id);

      return $this->render('AdminBundle:Default:monuments.html.twig', array(
        'monuments' => $monuments,
        'countmonuments' =>  $countmonuments
      ));
    }

    public function sportsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $category_id = 1;
      $sports = $em->getRepository(Events::class)->eventFromThisCategoryAdmin($category_id);
      $countsports = $em->getRepository(Events::class)->countAllEventsForThisCategory($category_id);

      return $this->render('AdminBundle:Default:sports.html.twig', array(
        'sports' => $sports,
        'countsports' =>  $countsports
      ));
    }

    // Formulaire GET pour les catégories
    public function newAction()
    {
      $category = new Category();
      $form = $this->createForm(CategoryType::class, $category);
      return $this->render('AdminBundle:Category:new.html.twig', array(
          'form' => $form->createView(),
      ));
    }

    // Formulaire POST pour les catégories
    public function newformAction(Request $request)
    {
      $category = new Category();
      $form = $this->createForm(CategoryType::class, $category);
      $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cat = $form->getData();

            $cat->setCreatedAt(new DateTime());
              $entityManager = $this->getDoctrine()->getManager();
              $entityManager->persist($cat);
              $entityManager->flush();

            return $this->redirectToRoute('admin_homepage');
          }

        return $this->render('AdminBundle:Category:new.html.twig', array(
            'form' => $form->createView(),
        ));


    }
    // Formulaire GET pour editer les elements
    public function editAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $event = $em->getRepository(Events::class)->find($id);
      if (!$event) {
         throw $this->createNotFoundException('The event does not exist');
      }

        $form = $this->createForm(EventsType::class, $event);

      return $this->render('AdminBundle:Default:edit.html.twig', array(
          'form' => $form->createView()
      ));
    }

    public function editformAction(Request $request,$id)
    {
      $em = $this->getDoctrine()->getManager();
      $event = $em->getRepository(Events::class)->find($id);
      if (!$event) {
         throw $this->createNotFoundException('The event does not exist');
      }
      $form = $this->createForm(EventsType::class, $event);
      $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cat = $form->getData();

              $entityManager = $this->getDoctrine()->getManager();
              $entityManager->persist($event);
              $entityManager->flush();

            return $this->redirectToRoute('admin_homepage');
          }

        return $this->render('AdminBundle:Default:edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }




}
