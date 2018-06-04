<?php

namespace AdminBundle\Controller;

use User\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventsAdminController extends Controller
{
    // Events
    public function eventsformAction()
    {
        return $this->render('AdminBundle:Default:eventsform.html.twig');
    }
}
