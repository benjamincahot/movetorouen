<?php

namespace Theme\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Theme\EvenementBundle\Entity\Evenements;
use Theme\EvenementBundle\Form\Type\EventsType;

class DefaultController extends Controller
{
    public function indexAction()
    {
<<<<<<< HEAD
      
=======
>>>>>>> fee900afb4c99164f4103f7e6c1a0a52d2590a3d
        return $this->render('@Evenement/Default/index.html.twig');
    }

    public function addAction()
    {
        return $this->render('@Evenement/Default/create.html.twig');
    }

    public function retrieveAction()
    {
        return $this->render('@Evenement/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@Evenement/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@Evenement/Default/delete.html.twig');
    }


}
