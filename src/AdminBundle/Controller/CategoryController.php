<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
