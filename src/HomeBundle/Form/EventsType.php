<?php

namespace HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use HomeBundle\Entity\Category;

class EventsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
                add('title', TextType::class,array(
                    'label' => 'Titre :'
                ))
                ->add('description', TextAreaType::class, array(
                    'label' => 'Description :'
                ))
                ->add('price', TextType::class, array(
                    'label' => 'Tarif (en €) :'
                ))
                ->add('startDate', DateTimeType::class, array(
                    'label' => 'Début de l\'événement :'
                ))
                ->add('endDate', DateTimeType::class, array(
                    'label' => 'Fin de l\'événement :'
                ))
                ->add('place', TextType::class, array(
                    'label' => 'Adresse :',
                    'attr' => array(
                      'rows' => '80',
                      'cols' => '980'
                    )))
                ->add('category', EntityType::class, array(
                    'class' => 'HomeBundle\Entity\Category',
                    'label' => 'Categorie',
                    'choice_label' => 'name',
                    'multiple' => false,
                    'expanded' => false,
                ))
                ->add('status', HiddenType::class, array(
                    'data' => 'abcdef'
                ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HomeBundle\Entity\Events',
            //'mapped' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'homebundle_events';
    }


}
