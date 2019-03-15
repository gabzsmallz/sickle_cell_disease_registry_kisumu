<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CareType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('patientId',EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient'])
        ->add('treatment')
        ->add('treamentStartDate',DateType::class,[
            'label' => 'Start Date',
            'widget' => 'single_text',
        ])
        ->add('treamentEndDate',DateType::class,[
            'label' => 'End Date',
            'widget' => 'single_text',
        ])
        ->add('treatmentComments',TextareaType::class,[
            'label' => 'Reason for appointment',
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Care'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_care';
    }


}
