<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PatientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('age',IntegerType::class)->add('gender',ChoiceType::class,['choices' => ['Male' => 'M','Female' => 'F']])->add('martial_status',ChoiceType::class,['choices' => ['Maried' => 'm','Single' => 's']])->add('county_of_origin',ChoiceType::class,['choices' => [
				    'Baringo County' => 'Baringo',
				    'Bomet County' => 'Bomet',
				    'Bungoma County' => 'Bungoma',
				    'Busia County'  => 'Busia',
				    'Elgeyo Marakwet County' => 'Elgeyo',
				    'Embu County' => 'Embu',
				    'Garissa County' => 'Garissa',
				    'Homa Bay County' => 'Homa',
				    'Isiolo County' => 'Isiolo',
				    'Kajiado County' => 'Kajiado',
				    'Kakamega County' => 'Kakamega',
				    'Kericho County' => 'Kakamega',
				    'Kiambu County' => 'Kiambu',
				   'Kilifi County' => 'Kilifi',
				    'Kirinyaga County' => 'Kirinyaga',
]])->add('sub_county_of_origin')->add('residence')->add('contact')->add('no_of_siblings')->add('registration_no')->add('dateOfDiagnosis',DateType::class,['widget' => 'single_text'])->add('sickle_cell_type',ChoiceType::class,['choices' => ['HbSA' => 'Hb SA','HbSC' => 'Hb SC','HbS-thal ' => 'Hb S-thal','HbSD' => 'Hb SD']])->add('contact_person')->add('contact_person_no')->add('contact_person_relation')->add('is_active',ChoiceType::class,['choices' => ['InActive','Active']]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Patient'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_patient';
    }


}
