<?php

namespace Theme\MonumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonumentBundle:Default:index.html.twig');
    }
}
