<?php

namespace App\Form;

use App\Entity\Personnalite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PersonnaliteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monNiveauEtude', ChoiceType::class, ([
                'choices'  => [
                    'BEPC / Brevet des collèges' => 'BEPC / Brevet des collèges',
                    'BEP / CAP' => 'BEP / CAP',
                    'BAC' => 'BAC',
                    'BAC +2' => 'BAC +2',
                    'BAC +3' => 'BAC +3',
                    'BAC +4' => 'BAC +4',
                    'BAC +5 et plus...' => 'BAC +5 et plus...',
                ]
            ]))
            ->add('monJob', TextType::class, ([
                'attr' => [
                    'placeholder' => 'Exemple : Graphiste',
                ],
            ]))
            ->add('monCaractere', ChoiceType::class, ([
                'choices'  => [
                    'Simple' => 'Simple',
                    'Indépendante' => 'Indépendante',
                    'Romantique' => 'Romantique',
                    'Taquine' => 'Taquine',
                    'Cool' => 'Cool',
                    'Organisée' => 'Organisée',
                    'Casanière' => 'Casanière',
                    'Fêtarde' => 'Fêtarde',
                    'Artiste' => 'Artiste',
                    'Sociable' => 'Sociable',
                    'Directe' => 'Directe',
                    'Réservée' => 'Réservée',
                    'Sensible' => 'Sensible',
                    'Réfléchie' => 'Réfléchie',
                    'Ambitieuse' => 'Ambitieuse',
                    'Cérébrale' => 'Cérébrale',
                    'Poli' => 'Poli',
                    'Distraite' => 'Distraite',
                    'Viril' => 'Viril',
                ]
            ]))
            ->add('mesConvictionsSpirituelles', ChoiceType::class, ([
                'choices'  => [
                    "L'athéisme" => "L'athéisme",
                    'Le christianisme' => 'Le christianisme',
                    "L'islam" => "L'islam",
                    "L'hindouisme" => "L'hindouisme",
                    'Les religions chinoises' => 'Les religions chinoises',
                    'Le bouddhisme' => 'Le bouddhisme',
                    'Les religions africaines' => 'Les religions africaines',
                    'Le judaisme' => 'Le judaisme',
                    "D'autres religions" => "D'autres religions",
                ]
            ]))
            ->add('mesPetitesAddictions', ChoiceType::class, ([
                'choices'  => [
                    'Cigarette' => 'Cigarette',
                    'Alcool' => 'Alcool',
                    'Jeux video' => 'Jeux video',
                    'Téléphone' => 'Téléphone',
                    'Aucune' => 'Aucune',
                ]
            ]))
            ->add('sonNiveauEtude', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'BEPC / Brevet des collèges' => 'BEPC / Brevet des collèges',
                    'BEP / CAP' => 'BEP / CAP',
                    'BAC' => 'BAC',
                    'BAC +2' => 'BAC +2',
                    'BAC +3' => 'BAC +3',
                    'BAC +4' => 'BAC +4',
                    'BAC +5 et plus...' => 'BAC +5 et plus...',
                ]
            ]))
            ->add('sonCaractere', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Simple' => 'Simple',
                    'Indépendante' => 'Indépendante',
                    'Romantique' => 'Romantique',
                    'Taquine' => 'Taquine',
                    'Cool' => 'Cool',
                    'Organisée' => 'Organisée',
                    'Casanière' => 'Casanière',
                    'Fêtarde' => 'Fêtarde',
                    'Artiste' => 'Artiste',
                    'Sociable' => 'Sociable',
                    'Directe' => 'Directe',
                    'Réservée' => 'Réservée',
                    'Sensible' => 'Sensible',
                    'Réfléchie' => 'Réfléchie',
                    'Ambitieuse' => 'Ambitieuse',
                    'Cérébrale' => 'Cérébrale',
                    'Poli' => 'Poli',
                    'Distraite' => 'Distraite',
                    'Viril' => 'Viril',
                ]
            ]))
            ->add('sesConvictionsSpirituelles', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    "L'athéisme" => "L'athéisme",
                    'Le christianisme' => 'Le christianisme',
                    "L'islam" => "L'islam",
                    "L'hindouisme" => "L'hindouisme",
                    'Les religions chinoises' => 'Les religions chinoises',
                    'Le bouddhisme' => 'Le bouddhisme',
                    'Les religions africaines' => 'Les religions africaines',
                    'Le judaisme' => 'Le judaisme',
                    "D'autres religions" => "D'autres religions",
                ]
            ]))
            ->add('sesPetitesAddictions', ChoiceType::class, ([
                'choices'  => [
                    'Ça m’est égal' => 'Ça m’est égal',
                    'Cigarette' => 'Cigarette',
                    'Alcool' => 'Alcool',
                    'Jeux video' => 'Jeux video',
                    'Téléphone' => 'Téléphone',
                    'Aucune' => 'Aucune',
                ]
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnalite::class,
        ]);
    }
}
