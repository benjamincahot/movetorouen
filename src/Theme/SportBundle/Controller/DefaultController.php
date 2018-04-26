<?php

namespace Theme\SportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Sport/Default/index.html.twig');
    }
}
