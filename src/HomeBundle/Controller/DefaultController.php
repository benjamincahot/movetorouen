<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HomeBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use HomeBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Home/Default/index.html.twig');
    }

    public function contactAction(Request $request)
    {

        $success = false;
        $contact = new Contact();
        $form = $this->createForm('HomeBundle\Form\ContactType', $contact);
        $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $success = true;
                // record contact dans bdd
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                // envoie mail  

                    
            }
        return $this->render('@Home/Default/contact.html.twig'  , array(
            'form'    => $form->createView(),
            'success' => $success
        ));
    }
    
}
