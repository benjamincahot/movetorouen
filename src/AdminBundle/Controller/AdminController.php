<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function profileAction()
    {
        return $this->render('AdminBundle:Default:profile.html.twig');
    }

    public function settingsAction()
    {
        return $this->render('AdminBundle:Default:settings.html.twig');
    }

    public function supportAction()
    {
        return $this->render('AdminBundle:Default:support.html.twig');
    }
}
