<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ConditionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('conditionType1',null,[
            'label' => 'Other conditions (1)',
        ])
            ->add('conditionType1Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (1))',
            'widget' => 'single_text',
        ])
            ->add('conditionType1Comments',TextareaType::class,[
            'label' => 'Other conditions (1) Comments',
        ])
            ->add('conditionType2',null,[
            'label' => 'Other conditions (2)',
            'widget' => 'single_text'
        ])
            ->add('conditionType2Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (2))',
            'widget' => 'single_text',
        ])
            ->add('conditionType2Comments',TextareaType::class,[
            'label' => 'Other conditions (2) Comments',
        ])
            ->add('conditionType3',null,[
            'label' => 'Other conditions (3)',
        ])
            ->add('conditionType3Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (3))',
            'widget' => 'single_text',
        ])
            ->add('conditionType3Comments',TextareaType::class,[
            'label' => 'Other conditions (3) Comments',
        ])
            ->add('conditionType4',null,[
            'label' => 'Other conditions (4)',
        ])
            ->add('conditionType4Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (4))',
            'widget' => 'single_text',
        ])
            ->add('conditionType4Comments',TextareaType::class,[
            'label' => 'Other conditions (4) Comments',
        ])
            ->add('conditionType5',null,[
            'label' => 'Other conditions (5)',
        ])
            ->add('conditionType5Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (5))',
            'widget' => 'single_text',
        ])
            ->add('conditionType5Commets',TextareaType::class,[
            'label' => 'Other conditions (5) Comments',
        ])
            ->add('conditionType6',null,[
            'label' => 'Other conditions (6)',
        ])
            ->add('conditionType6Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (6))',
            'widget' => 'single_text',
        ])
            ->add('conditionType6Comments',TextareaType::class,[
            'label' => 'Other conditions (6) Comments',
        ])
            ->add('conditionType7',null,[
            'label' => 'Other conditions (7)',
        ])
            ->add('conditionType7Date',DateType::class,[
            'label' => 'Date of occurence (Other conditions (7))',
            'widget' => 'single_text',
        ])
            ->add('conditionType7Comments',TextareaType::class,[
            'label' => 'Other conditions (7) Comments',
        ])
            ->add('patientId', EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Conditions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_conditions';
    }


}
