<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('episodeType1')->add('episodeType1Date')->add('episodeType1Comments')->add('episodeType2')->add('episodeType2Date')->add('episodeType2Comments')->add('episodeType3')->add('episodeType3Date')->add('episodeType3Comments')->add('episodeType4')->add('episodeType4Date')->add('episodeType4Comments')->add('episodeType5')->add('episodeType5Date')->add('episodeType5Comments')->add('episodeType6')->add('episodeType6Date')->add('episodeType6Comments')->add('episodeType7')->add('episodeType7Date')->add('episodeType7Comments')->add('episodeType8')->add('episodeType8Date')->add('episodeType8Comments')->add('episodeType9')->add('episodeType9Date')->add('episodeType9Comments')->add('patientId');
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
