<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CRUDMonumentController extends Controller
{
    // Monuments
    public function monumentscreateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function monumentsretrieveAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function monumentsupdateAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function monumentsdeleteAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }
}
