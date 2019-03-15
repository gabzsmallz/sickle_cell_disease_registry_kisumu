<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class SurgicalHistoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('surgeryConducted1',null,[
            'label' => 'Surgery Conducted (1)',
        ])
        ->add('surgeryConducted1Date',DateType::class,['widget' => 'single_text'])
        ->add('surgeryConducted2',null,[
            'label' => 'Surgery Conducted (2)',
        ])
        ->add('surgeryConducted2Date',DateType::class,['widget' => 'single_text'])
        ->add('surgeryConducted3',null,[
            'label' => 'Surgery Conducted (3)',
        ])
        ->add('surgeryConducted3Date',DateType::class,['widget' => 'single_text'])
        ->add('surgeryConducted4',null,[
            'label' => 'Surgery Conducted (4)',
        ])
        ->add('surgeryConducted4Date',DateType::class,['widget' => 'single_text'])
        ->add('patientId',EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SurgicalHistory'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_surgicalhistory';
    }


}
