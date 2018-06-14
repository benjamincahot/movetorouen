<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HomeBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\CategoryType;
use \DateTime;
use HomeBundle\Entity\Events;

class CategoryController extends Controller
{
    public function parksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category_id = 3;
        $parks = $em->getRepository(Events::class)->eventFromThisCategory($category_id);
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
      $events = $em->getRepository(Events::class)->eventFromThisCategory($category_id);
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
      $monuments = $em->getRepository(Events::class)->eventFromThisCategory($category_id);
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
      $sports = $em->getRepository(Events::class)->eventFromThisCategory($category_id);
      $countsports = $em->getRepository(Events::class)->countAllEventsForThisCategory($category_id);

      return $this->render('AdminBundle:Default:sports.html.twig', array(
        'sports' => $sports,
        'countsports' =>  $countsports
      ));
    }

      // route method get
    public function newAction()
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);
        // $form = $this->createFormBuilder($category)
        //     ->add('name', TextType::class)
        //     ->add('save', SubmitType::class, array('label' => 'Create Task'))
        //     ->getForm();

        return $this->render('AdminBundle:Category:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

      // POST
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

    public function listingAction()
    {
      // requete => all category
      $entityManager = $this->getDoctrine()->getManager();

      ///findAll();

    }
}
