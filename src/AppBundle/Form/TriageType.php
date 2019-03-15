<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class TriageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('visitId', EntityType::class,['class' => 'AppBundle:Visits', 'choice_label' => 'Visit Type'])
        ->add('weight', RangeType::class,[
            'attr' => [
                'min' => 0,
                'max' => 500
            ],
        ])
        ->add('height', RangeType::class,[
            'attr' => [
                'min' => 0,
                'max' => 500
            ]
        ])
        ->add('bmi',null,[
            'label' => 'BMI',
        ])
        ->add('bloodPressure',null,[
            'label' => 'Blood Pressure',
        ])
        ->add('temperature', RangeType::class,[
            'attr' => [
                'min' => -20,
                'max' => 100
            ]
        ])
        ->add('prothrombinTime',null,[
            'label' => 'Prothrombin Time',
        ])
        ->add('symptoms',TextareaType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Triage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_triage';
    }


}
