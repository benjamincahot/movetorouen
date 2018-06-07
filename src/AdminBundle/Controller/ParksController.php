<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParksAdminController extends Controller
{
    // Parks
    public function parkscreateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function parksretrieveAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function parksupdateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function parksdeleteAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }
}
