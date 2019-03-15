<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MedsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('careId', EntityType::class,['class' => 'AppBundle:Care', 'choice_label' => 'Patient'])
        ->add('medsName',null,[
            'label' => 'Medication',
        ])
        ->add('medsDose',null,[
            'label' => 'Dosage',
        ])
        ->add('medsComments',TextareaType::class,[
            'label' => 'Medication remarks',
        ])
        ->add('medsDailyDose',null,[
            'label' => 'Daily dosage',
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Meds'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_meds';
    }


}
