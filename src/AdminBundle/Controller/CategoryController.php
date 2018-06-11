<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HomeBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\CategoryType;
use \DateTime;

class CategoryController extends Controller
{
    // Categories
    public function parksAction()
    {
        return $this->render('AdminBundle:Default:parks.html.twig');
    }

    public function eventsAction()
    {
        return $this->render('AdminBundle:Default:events.html.twig');
    }

    public function monumentsAction()
    {
        return $this->render('AdminBundle:Default:monuments.html.twig');
    }

    public function restaurantsAction()
    {
        return $this->render('AdminBundle:Default:restaurants.html.twig');
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
