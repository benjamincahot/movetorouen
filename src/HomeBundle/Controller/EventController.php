<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Category;
use HomeBundle\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    public function createEventAction()
    {
        $category = new Category();
        $category->setName('Evenement');

        $event = new Events();
        $event->setName('Keyboard');
        $event->setPrice(19.99);
        $event->setDescription('Ergonomic and stylish!');

        // relates this product to the category
        $event->setCategory($category);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->persist($event);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$event->getId()
            .' and new category with id: '.$category->getId()
        );
    }

    public function showAction($eventId)
    {
        $event = $this->getDoctrine()
        ->getRepository(Product::class)
        ->find($eventId);

        $categoryName = $event->getCategory()->getName();

        // ...
    }
}
