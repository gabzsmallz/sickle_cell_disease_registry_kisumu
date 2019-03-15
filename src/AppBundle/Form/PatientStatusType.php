<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PatientStatusType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('statusType',ChoiceType::class,['choices' => ['Stable' => 'stable','Crisis type' => 'crisis_type','Disability-state' => 'Disability_state']])
        ->add('statusComments',TextareaType::class,[
            'label' => 'Recommendation',
        ])
        ->add('statusDate',DateType::class,[
            'label' => 'Date',
            'widget' => 'single_text',
        ])
        ->add('patientId', EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PatientStatus'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_patientstatus';
    }


}
