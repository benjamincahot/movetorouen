<?php

namespace AdminBundle\Controller;

use User\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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

    public function settingsAction()
    {
      return $this->render('AdminBundle:Default:settings.html.twig');
    }

    public function updateAction()
    {
      return $this->render('AdminBundle:Default:update.html.twig');
    }
}
