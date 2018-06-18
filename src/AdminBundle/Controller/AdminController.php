<?php

namespace AdminBundle\Controller;

use User\UserBundle\Entity\User;
use User\UserBundle\Repository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminController extends Controller
{
    // Controller principal
    public function dashboardAction()
    {
      return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function listingAction()
    {
      $em = $this->getDoctrine()->getManager();
      $users = $em->getRepository(User::class)->findAll();
      $countusers = count($users);

      
      return $this->render('AdminBundle:Default:listing.html.twig', array(
        'users' => $users,
        'countusers' =>  $countusers
      ));
    }

    public function supportAction()
    {
      return $this->render('AdminBundle:Default:support.html.twig');
    }
}
