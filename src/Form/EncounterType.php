<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Encounterlists;

class EncounterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('tyrantid')
            ->add('day1id')
            ->add('day2id')
            ->add('day3id')
            ->add('day4id')
            ->add('day5id')
            ->add('day6id')
            ->add('day7id')
            ->add('day8id')
            ->add('day9id')
            ->add('day10id')
            ->add('day11id')
            ->add('day12id')
            ->add('day13id')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Encounterlists::class,
            'csrf_protection' => false
        ));
    }
}