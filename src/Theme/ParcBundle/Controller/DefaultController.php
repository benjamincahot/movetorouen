<?php

namespace Theme\ParcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Parc/Default/index.html.twig');
    }

    public function addAction()
    {
        return $this->render('@Parc/Default/create.html.twig');
    }

    public function retrieveAction()
    {
        return $this->render('@Parc/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@Parc/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@Parc/Default/delete.html.twig');
    }
}
