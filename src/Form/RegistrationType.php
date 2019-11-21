<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userName', TextType::class, ([
                'attr' => [
                    'placeholder' => 'Mon pseudo'
                ]
            ]))
            ->add('email', EmailType::class, ([
                'attr' => [
                    'placeholder' => 'Mon Email'
                ]
            ]))
            ->add('password', PasswordType::class, ([
                'attr' => [
                    'placeholder' => 'Mon mot de passe'
                ]
            ]))
            ->add('confirm_password', PasswordType::class, ([
                'attr' => [
                    'placeholder' => 'Ma confirmation de mot de passe'
                ]
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
