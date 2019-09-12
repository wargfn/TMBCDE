<?php
namespace App\Form;
use App\Entity\BATs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BATType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('days')
            ->add('progress')
            ->add('health')
            ->add('ini')
            ->add('atk')
            ->add('def')
            ->add('tdie1')
            ->add('tdie2')
            ->add('tdie3')
            ->add('range')
            ->add('target')
            ->add('skull')
            ->add('skill1')
            ->add('skill2')
            ->add('skill3')
            ->add('baddie1')
            ->add('baddie2')
            ->add('baddie3')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => BATs::class,
            'csrf_protection' => false
        ));
    }
}