<?php

namespace Theme\SportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SportBundle:Default:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('@Sport/Default/create.html.twig');
    }

    public function retrieveAction()
    {
        return $this->render('@Sport/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@Sport/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@Sport/Default/delete.html.twig');
    }
}
