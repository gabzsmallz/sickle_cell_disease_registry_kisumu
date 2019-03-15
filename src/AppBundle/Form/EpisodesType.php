<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EpisodesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('episodeType1',null,[
            'label' => 'Type of sickle cell crisis (1)',
        ])
        ->add('episodeType1Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (1))',
            'widget' => 'single_text',
        ])
        ->add('episodeType1Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (1) Comments',
        ])
        ->add('episodeType2',null,[
            'label' => 'Type of sickle cell crisis (2)',
        ])
        ->add('episodeType2Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (2))',
            'widget' => 'single_text',
        ])
        ->add('episodeType2Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (2) Comments',
        ])
        ->add('episodeType3',null,[
            'label' => 'Type of sickle cell crisis (3)',
        ])
        ->add('episodeType3Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (3))',
            'widget' => 'single_text',
        ])
        ->add('episodeType3Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (3) Comments',
        ])
        ->add('episodeType4',null,[
            'label' => 'Type of sickle cell crisis (4)',
        ])
        ->add('episodeType4Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (4))',
            'widget' => 'single_text',
        ])
        ->add('episodeType4Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (4) Comments',
        ])
        ->add('episodeType5',null,[
            'label' => 'Type of sickle cell crisis (5)',
        ])
        ->add('episodeType5Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (5))',
            'widget' => 'single_text',
        ])
        ->add('episodeType5Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (5) Comments',
        ])
        ->add('episodeType6',null,[
            'label' => 'Type of sickle cell crisis (6)',
        ])
        ->add('episodeType6Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (6))',
            'widget' => 'single_text',
        ])
        ->add('episodeType6Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (6) Comments',
        ])
        ->add('episodeType7',null,[
            'label' => 'Type of sickle cell crisis (7)',
        ])
        ->add('episodeType7Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (7))',
            'widget' => 'single_text',
        ])
        ->add('episodeType7Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (7) Comments',
        ])
        ->add('episodeType8',null,[
            'label' => 'Type of sickle cell crisis (8)',
        ])
        ->add('episodeType8Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (8))',
            'widget' => 'single_text',
        ])
        ->add('episodeType8Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (8) Comments',
        ])
        ->add('episodeType9',null,[
            'label' => 'Type of sickle cell crisis (9)',
        ])
        ->add('episodeType9Date',DateType::class,[
            'label' => 'Date of occurence (sickle cell crisis (9))',
            'widget' => 'single_text',
        ])
        ->add('episodeType9Comments',TextareaType::class,[
            'label' => 'Type of sickle cell crisis (9) Comments',
        ])
        ->add('patientId', EntityType::class,['class' => 'AppBundle:Patient', 'choice_label' => 'Patient']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Episodes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_episodes';
    }


}
