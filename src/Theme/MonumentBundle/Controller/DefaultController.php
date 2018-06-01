<?php

namespace Theme\MonumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Monument/Default/index.html.twig');
    }

    public function addAction()
    {
        return $this->render('@Monument/Default/create.html.twig');
    }

    public function retrieveAction()
    {
        return $this->render('@Monument/Default/retrieve.html.twig');
    }

    public function updateAction()
    {
        return $this->render('@Monument/Default/update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('@Monument/Default/delete.html.twig');
    }
}
