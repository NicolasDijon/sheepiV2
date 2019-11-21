<?php

namespace App\Form;

use App\Entity\Situation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monSexe', ChoiceType::class, ([
                'choices'  => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Non binaire' => 'Non binaire',
                ],
            ]))
            ->add('monAge', RangeType::class, [
                'attr' => [
                    'min' => 18,
                    'max' => 80
                ]
            ])
            ->add('monPays', TextType::class, [
                'attr' => [
                    'placeholder' => 'France'
                ],
            ])
            ->add('monDepartement', TextType::class, [
                'attr' => [
                    'placeholder' => '01 –Ain'
                ],
            ])
            ->add('maVille', TextType::class, [
                'attr' => [
                    'placeholder' => 'Abbéville-la-Rivière'
                ],
            ])
            ->add('monTelephone', TextType::class, [
                'attr' => [
                    'placeholder' => 'Exemple :0101010101'
                ],
            ])
            ->add('mesEnfants', ChoiceType::class, ([
                'choices'  => [
                    'Aucun' => 'Aucun',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    'Plus de 3' => 'Plus de 3',
                ],
            ]))
            ->add('mesOrigines', ChoiceType::class, ([
                'choices'  => [
                    'Affro / antillaises' => 'Affro / antillaises',
                    'Asiatriques' => 'Asiatriques',
                    'Eurasiennes' => 'Eurasiennes',
                    'Européennes' => 'Européennes',
                    'Latines' => 'Latines',
                    'Maghrébines' => 'Maghrébines',
                    'Métisses' => 'Métisses',
                ],
            ]))
            ->add('sonSexe', ChoiceType::class, ([
                'choices'  => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Non binaire' => 'Non binaire',
                ],
            ]))
            ->add('sonAge', RangeType::class, [
                'attr' => [
                    'min' => 18,
                    'max' => 80
                ]
            ])
            ->add('sonPays', TextType::class, [
                'attr' => [
                    'placeholder' => 'France'
                ],
            ])
            ->add('sesDepartements', TextType::class, [
                'attr' => [
                    'placeholder' => '01 –Ain'
                ],
            ])
            ->add('sesEnfants', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Aucun' => 'Aucun',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    'Plus de 3' => 'Plus de 3',
                ],
            ]))
            ->add('sesOrigines', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Affro / antillaises' => 'Affro / antillaises',
                    'Asiatriques' => 'Asiatriques',
                    'Eurasiennes' => 'Eurasiennes',
                    'Européennes' => 'Européennes',
                    'Latines' => 'Latines',
                    'Maghrébines' => 'Maghrébines',
                    'Métisses' => 'Métisses',
                ],
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Situation::class,
        ]);
    }
}
