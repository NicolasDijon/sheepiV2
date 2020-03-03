<?php

namespace App\Form;

use App\Entity\Physique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PhysiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maTaille', RangeType::class, [
                'attr' => [
                    'min' => 130,
                    'max' => 300
                ]
            ])
            ->add('maSilhouette', ChoiceType::class, ([
                'choices'  => [
                    'Mince' => 'Mince',
                    'Sportive' => 'Sportive',
                    'Normale' => 'Normale',
                    'Pulpeuse' => 'Pulpeuse',
                    'Ronde' => 'Ronde',
                ]
            ]))
            ->add('mesCheveux', ChoiceType::class, ([
                'choices'  => [
                    'Longueur' => [
                        'Courts' => 'Courts',
                        'Mi-longs' => 'Mi-longs',
                        'Longs' => 'Longs',
                    ],
                    'Couleur' => [
                        'Blonds' => 'Blonds',
                        'Bruns' => 'Bruns',
                        'Poivres/sel' => 'Poivres/sel',
                        'Roux' => 'Roux',
                    ],
                ],
            ]))
            ->add('mesYeux', ChoiceType::class, ([
                'choices'  => [
                    'Bleus' => 'Bleus',
                    'Verts' => 'Verts',
                    'Marrons' => 'Marrons',
                    'Noirs' => 'Noirs',
                    'Gris' => 'Gris',
                ],
            ]))
            ->add('mesSignesParticuliers', ChoiceType::class, ([
                'choices'  => [
                    'Des tatouages' => 'Des tatouages',
                    'Des piercings' => 'Des piercings',
                    'Des lunettes' => 'Des lunettes',
                    'Aucun signe particulier' => 'Aucun signe particulier',
                ],
            ]))
            ->add('monStyle', ChoiceType::class, ([
                'choices'  => [
                    'Classique' => 'Classique',
                    'Décontracté' => 'Décontracté',
                    'Intello' => 'Intello',
                    'Artiste' => 'Artiste',
                    'Sportif' => 'Sportif',
                    'Geek' => 'Geek',
                    'Rock / Métal / Punk' => 'Rock / Métal / Punk',
                    'Goth' => 'Goth',
                    'Hip-hop' => 'Hip-hop',
                    'BCBG / Chic' => 'BCBG / Chic',
                    'Aventurier' => 'Aventurier',
                    'Spirituel' => 'Spirituel',
                    'Bohème' => 'Bohème',
                    'Autre' => 'Autre',
                ],
            ]))
            ->add('saTaille', RangeType::class, [
                'attr' => [
                    'min' => 130,
                    'max' => 300
                ]
            ])
            ->add('saSilhouette', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Mince' => 'Mince',
                    'Sportive' => 'Sportive',
                    'Normale' => 'Normale',
                    'Pulpeuse' => 'Pulpeuse',
                    'Ronde' => 'Ronde',
                ],
            ]))
            ->add('sesCheveux', ChoiceType::class, ([
                'choices'  => [
                    'Longueur' => [
                        'Ça m’est égal' => 'Ça m’est égal',
                        'Courts' => 'Courts',
                        'Mi-longs' => 'Mi-longs',
                        'Longs' => 'Longs',
                    ],
                    'Couleur' => [
                        'Blonds' => 'Blonds',
                        'Bruns' => 'Bruns',
                        'Poivres/sel' => 'Poivres/sel',
                        'Roux' => 'Roux',
                    ],
                ],
            ]))
            ->add('sesYeux', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Bleus' => 'Bleus',
                    'Verts' => 'Verts',
                    'Marrons' => 'Marrons',
                    'Noirs' => 'Noirs',
                    'Gris' => 'Gris',
                ],
            ]))
            ->add('sesSignesParticuliers', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Des tatouages' => 'Des tatouages',
                    'Des piercings' => 'Des piercings',
                    'Des lunettes' => 'Des lunettes',
                    'Aucun signe particulier' => 'Aucun signe particulier',
                ],
            ]))
            ->add('sesStyles', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Classique' => 'Classique',
                    'Décontracté' => 'Décontracté',
                    'Intello' => 'Intello',
                    'Artiste' => 'Artiste',
                    'Sportif' => 'Sportif',
                    'Geek' => 'Geek',
                    'Rock / Métal / Punk' => 'Rock / Métal / Punk',
                    'Goth' => 'Goth',
                    'Hip-hop' => 'Hip-hop',
                    'BCBG / Chic' => 'BCBG / Chic',
                    'Aventurier' => 'Aventurier',
                    'Spirituel' => 'Spirituel',
                    'Bohème' => 'Bohème',
                    'Autre' => 'Autre',
                ],
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Physique::class,
        ]);
    }
}
