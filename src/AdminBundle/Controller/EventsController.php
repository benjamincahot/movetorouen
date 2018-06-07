<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HomeBundle\Entity\Events;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\EventsType;
use \DateTime;

class EventsController extends Controller
{
    // Events
    public function eventsformAction()
    {
        return $this->render('AdminBundle:Default:eventsform.html.twig');
    }
}
