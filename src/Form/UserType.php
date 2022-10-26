<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom : ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom : ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('familyTypology', ChoiceType::class, [
                'choices' => [
                    'Homme seul' => 1,
                    'Femme seule' => 2,
                    'Couple sans enfant' => 3,
                    'Couple avec enfant' => 4,
                ],
                'choice_attr' => [
                    'Homme seul' => ['data-color' => 'Red'],
                    'Femme seule' => ['data-color' => 'Yellow'],
                    'Couple sans enfant' => ['data-color' => 'Green'],
                    'Couple avec enfant' => ['data-color' => 'Blue'],
                ],
                'label' => 'Typologie familiale: ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('birthday', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
                'label' => 'Date de naissance: ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
