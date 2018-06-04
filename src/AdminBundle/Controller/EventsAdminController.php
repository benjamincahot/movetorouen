<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsAdminController extends Controller
{
    // Events
    public function eventsformAction()
    {
        return $this->render('AdminBundle:Default:eventsform.html.twig');
    }
}
