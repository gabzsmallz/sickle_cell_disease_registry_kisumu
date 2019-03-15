<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LabRadiologyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('haemoglobin')
        ->add('recticCount',null,[
            'label' => 'Rectic Count',
        ])
        ->add('meanCorpuscularVolume',null,[
            'label' => 'Mean Corpuscular Volume',
        ])
        ->add('haematocrit')
        ->add('plateletCount')->add('creatinine')->add('bilirubin')
        ->add('transcranialDoppler',null,[
            'label' => 'Transcranial Doppler',
        ])
        ->add('echocardiogram')
        ->add('echoComments')
        ->add('otherTest1')
        ->add('otherTest1Comments')
        ->add('otherTest2')
        ->add('otherTest2Comments')
        ->add('otherTest3')
        ->add('otherTest3Comments')
        ->add('haemoglobinComments')->add('recticCountComments')
        ->add('meanCorpuscularVolumeComments')->add('haematocritComments')->add('plateletCountComments')->add('creatinineComments')->add('bilirubinCommets')->add('transcranialDopplerComments')
        ->add('triageId', EntityType::class,['class' => 'AppBundle:Triage', 'choice_label' => 'Triage']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LabRadiology'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_labradiology';
    }


}
