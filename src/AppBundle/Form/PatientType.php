<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;


class PatientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('age', IntegerType::class)
        ->add('gender',ChoiceType::class,['choices' => ['Male' => 'M','Female' => 'F']])->add('martial_status',ChoiceType::class,['choices' => ['Maried' => 'm','Single' => 's']])
        ->add('county_of_origin',ChoiceType::class,['choices' => [
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
                    'Kisii County' => 'Kisii',
                    'Kisumu County' => 'Kisumu',
                    'Kitui County' => 'Kitui',
                    'Kwale County' => 'Kwale',
                    'Laikipia County' => 'Laikipia',
                    'Lamu County' => 'Lamu',
                    'Machakos County' => 'Machakos',
                    'Makueni County' => 'Makueni',
                    'Mandera County' => 'Mandera',
                    'Meru County' => 'Meru',
                    'Migori County' => 'Migori',
                    'Mombasa County' => 'Mombasa',
                    'Muranga County' => 'Muranga',
                    'Nairobi County' => 'Nairobi',
                    'Nakuru County' => 'Nakuru',
                    'Nandi County' => 'Nandi',
                    'Narok County' => 'Narok',
                    'Nyamira County' => 'Nyamira',
                    'Nyandarua County' => 'Nyandarua',
                    'Nyeri County' => 'Nyeri',
                    'Samburu County' => 'Samburu',
                    'Siaya County' => 'Siaya',
                    'Taita Taveta County' => 'Taita',
                    'Tharaka Nithi County' => 'Tharaka_Nithi',
                    'Trans Nzoia County' => 'Trans_Nzoia',
                    'Turkana County' => 'Turkana',
                    'Uasin Gishu County' => 'Uasin_Gishu',
                    'Vihiga County' => 'Vihiga',
                    'Wajir County' => 'Wajir',
                    'West Pokot County' => 'West_Pokot',
        ]])
        ->add('sub_county_of_origin',ChoiceType::class,['choices' => [
            'Nairobi County' =>[
                'Dagoretti North' => 'Dagoretti_North',
                'Dagoretti South' => 'Dagoretti_South',
                'Embakasi Central' => 'Embakasi_Central',
                'Embakasi East' => 'Embakasi_East',
                'Embasaki South' => 'Embasaki_South',
                'Embakasi North' => 'Embakasi_North',
                'Embakasi West' => 'Embakasi_West',
                'Kamukunji' => 'Kamukunji',
                'Kasarani' => 'Kasarani',
                'Kibra​​' => 'Kibra​​',
                'Langata' => 'Langata​​',
                'Makadara' => 'Makadara​​',
                'Mathare' => 'Mathare',
                'Roysambu' => 'Roysambu',
                'Ruaraka​​' => 'Ruaraka​​',
                'Starehe' => 'Starehe',
                'Westlands​​' => 'Westlands​​',
            ],
            'Kisumu County' =>[
                'Kisumu East' => 'Kisumu_East',
                'Kisumu West' => 'Kisumu_West',
                'Kisumu Central' => 'Kisumu Central',
                'Seme' => 'Seme',
                'Nyando' => 'Nyando',
                'Muhoroni' => 'Muhoroni',
                'Nyakach' => 'Nyakach',
            ],
        ]])
        ->add('residence')->add('contact')
        ->add('no_of_siblings',IntegerType::class)
        ->add('registration_no')
        ->add('dateOfDiagnosis',DateType::class,['widget' => 'single_text'])
        ->add('sickle_cell_type',ChoiceType::class,['choices' => ['HbSA' => 'Hb SA','HbSC' => 'Hb SC','HbS-thal ' => 'Hb S-thal','HbSD' => 'Hb SD','HbSS' => 'HbSS']])
        ->add('contact_person')
        ->add('contact_person_no')
        ->add('contact_person_relation')
        ->add('is_active',ChoiceType::class,['choices' => ['Active' => 1, 'InActive' => 0]]);
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
