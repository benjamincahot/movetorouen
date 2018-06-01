<?php

namespace Theme\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Theme\EvenementBundle\Entity\Evenements;

class DefaultController extends Controller
{
    public function indexAction()
    {
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
