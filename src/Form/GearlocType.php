<?php
namespace App\Form;
use App\Entity\Gearlocs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GearlocType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('health')
            ->add('dexterity')
            ->add('attack')
            ->add('defense')
            ->add('ability1')
            ->add('ability2')
            ->add('ability3')
            ->add('ability4')
            ->add('ability5')
            ->add('ability6')
            ->add('ability7')
            ->add('ability8')
            ->add('ability9')
            ->add('ability10')
            ->add('ability11')
            ->add('ability12')
            ->add('ability13')
            ->add('ability14')
            ->add('ability15')
            ->add('ability16')
            ->add('loot1')
            ->add('loot2')
            ->add('loot3')
            ->add('loot4')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gearlocs::class,
            'csrf_protection' => false
        ));
    }
}