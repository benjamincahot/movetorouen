<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function dashboardAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

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
}
