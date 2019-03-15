<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class GeneticCounsellingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('patientId', EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient'])
        ->add('dateOfCounselling',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (9))',
            'widget' => 'single_text',
        ])
        ->add('counsellingComments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (9) Comments',
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\GeneticCounselling'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_geneticcounselling';
    }


}
