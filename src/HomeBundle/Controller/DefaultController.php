<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Home/Default/index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@Home/Default/contact.html.twig');
    }
}
