<?php

namespace AdminBundle\Controller;

use User\UserBundle\Entity;
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

      return $this->render('AdminBundle:Default:listing.html.twig');
    }

    public function supportAction()
    {
      return $this->render('AdminBundle:Default:support.html.twig');
    }

    public function updateAction()
    {
      return $this->render('AdminBundle:Default:update.html.twig');
    }

    public function errorAction()
    {
      return $this->render('AdminBundle:Default:error.html.twig');
    }
}
