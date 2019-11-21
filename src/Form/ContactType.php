<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'Je tape mon nom',
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Je tape mon adresse Email',
                ]
            ])
            ->add('sujet', ChoiceType::class, ([
                'choices'  => [
                    'Lorem ipsum' => 'Lorem ipsum',
                    'Lorem ipsum1' => 'Lorem ipsum1',
                    'Lorem ipsum2' => 'Lorem ipsum3',
                ],
            ]))
            ->add('message', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Je tape mon message...',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
