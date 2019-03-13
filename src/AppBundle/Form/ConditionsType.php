<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConditionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('conditionType1')->add('conditionType1Date')->add('conditionType1Comments')->add('conditionType2')->add('conditionType2Date')->add('conditionType2Comments')->add('conditionType3')->add('conditionType3Date')->add('conditionType3Comments')->add('conditionType4')->add('conditionType4Date')->add('conditionType4Comments')->add('conditionType5')->add('conditionType5Date')->add('conditionType5Commets')->add('conditionType6')->add('conditionType6Date')->add('conditionType6Comments')->add('conditionType7')->add('conditionType7Date')->add('conditionType7Comments')->add('patientId');
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
