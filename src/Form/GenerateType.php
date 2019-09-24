<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenerateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('baseSetTyrants')
            ->add('undertowTyrants')
            ->add('spliceDiceTyrants')
            ->add('batsTyrants')
            ->add('baseSetEncounters')
            ->add('undertowEncounters')
            ->add('40DaysEncounters')
            ->add('ageOfTyrannyEncounters')
            ->add('spliceDiceEncounters')
            ->add('batsEncounters')
            ->add('party')
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false
        ));
    }
}