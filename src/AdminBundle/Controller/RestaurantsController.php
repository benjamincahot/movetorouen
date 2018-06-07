<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestaurantsAdminController extends Controller
{
    // Restaurants
    public function restaurantscreateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function restaurantsretrieveAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function restaurantsupdateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function restaurantsdeleteAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }
}
