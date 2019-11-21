<?php

namespace App\Form;

use App\Entity\Passion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PassionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mesActivitesSportives', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Art martiaux' => 'Art martiaux',
                    'Aventure' => 'Aventure',
                    'Badminton' => 'Badminton',
                    'Basket' => 'Basket',
                    'Cardio / running' => 'Cardio / running',
                    'Danse' => 'Danse',
                    'Escalade' => 'Escalade',
                    'Football' => 'Football',
                    'Golf' => 'Golf',
                    'Moto' => 'Moto',
                    'Pétanque' => 'Pétanque',
                    'Ping-pong' => 'Ping-pong',
                    'Plongée' => 'Plongée',
                    'Randonnées' => 'Randonnées',
                    'Rugby' => 'Rugby',
                    'Sport de glisse' => 'Sport de glisse',
                    'Sports nautiques' => 'Sports nautiques',
                    'Tennis' => 'Tennis',
                    'Vello / VTT' => 'Vello / VTT',
                    'Volley' => 'Volley',
                    'Autre' => 'Autre',
                    'Aucun' => 'Aucun',
                ]
            ]))
            ->add('mesActivitesNaturelles', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Animaux' => 'Animaux',
                    'Ecolo / bio' => 'Ecolo / bio',
                    'Promenades au grand air' => 'Promenades au grand air',
                    'Végétation / jardinage' => 'Végétation / jardinage',
                    'Végétarisme' => 'Végétarisme',
                    'Urbex' => 'Urbex',
                    'Naturisme' => 'Naturisme',
                    'Autre' => 'Autre',
                    'Aucun' => 'Aucun',
                ]
            ]))
            ->add('mesActivitesArtistiques', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Arts' => 'Arts',
                    'Musique' => 'Musique',
                    'Couture' => 'Couture',
                    'Cuisine' => 'Cuisine',
                    'Dessin / peinture' => 'Dessin / peinture',
                    'Ecriture' => 'Ecriture',
                    'Photographie' => 'Photographie',
                    'Graphisme' => 'Graphisme',
                    'Vidéo' => 'Vidéo',
                    'Sculpture' => 'Sculpture',
                    'Théâtre / danse' => 'Théâtre / danse',
                    'Autre' => 'Autre',
                    'Aucun' => 'Aucun',
                ]
            ]))
            ->add('mesActivitesCerebrales', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Esprit' => 'Esprit',
                    'Histoire' => 'Histoire',
                    'Géographie' => 'Géographie',
                    'Esotérisme' => 'Esotérisme',
                    'Philosophie' => 'Philosophie',
                    'Sociologie' => 'Sociologie',
                    'Psychologie' => 'Psychologie',
                    'Politique' => 'Politique',
                    'Sciences' => 'Sciences',
                    'Spiritualité' => 'Spiritualité',
                    'Autre' => 'Autre',
                    'Aucun' => 'Aucun',
                ]
            ]))
            ->add('mesDivertissements', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Soirée' => 'Soirée',
                    'Tourisme' => 'Tourisme',
                    'Cinéma / série' => 'Cinéma / série',
                    'Collection' => 'Collection',
                    'Lecture' => 'Lecture',
                    'Expos / musées' => 'Expos / musées',
                    'Informatique' => 'Informatique',
                    'Jeux' => 'Jeux',
                    'Manga' => 'Manga',
                    'Musique' => 'Musique',
                    'Opéra' => 'Opéra',
                    'Théâtre' => 'Théâtre',
                    'Parc de loisirs' => 'Parc de loisirs',
                    'Autre' => 'Autre',
                    'Aucun' => 'Aucun',
                ]
            ]))
            ->add('sesActivitesSportives', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Art martiaux' => 'Art martiaux',
                    'Aventure' => 'Aventure',
                    'Badminton' => 'Badminton',
                    'Basket' => 'Basket',
                    'Cardio / running' => 'Cardio / running',
                    'Danse' => 'Danse',
                    'Escalade' => 'Escalade',
                    'Football' => 'Football',
                    'Golf' => 'Golf',
                    'Moto' => 'Moto',
                    'Pétanque' => 'Pétanque',
                    'Ping-pong' => 'Ping-pong',
                    'Plongée' => 'Plongée',
                    'Randonnées' => 'Randonnées',
                    'Rugby' => 'Rugby',
                    'Sport de glisse' => 'Sport de glisse',
                    'Sports nautiques' => 'Sports nautiques',
                    'Tennis' => 'Tennis',
                    'Vello / VTT' => 'Vello / VTT',
                    'Volley' => 'Volley',
                    'Autre' => 'Autre',
                ]
            ]))
            ->add('sesActivitesNaturelles', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Animaux' => 'Animaux',
                    'Ecolo / bio' => 'Ecolo / bio',
                    'Promenades au grand air' => 'Promenades au grand air',
                    'Végétation / jardinage' => 'Végétation / jardinage',
                    'Végétarisme' => 'Végétarisme',
                    'Urbex' => 'Urbex',
                    'Naturisme' => 'Naturisme',
                    'Autre' => 'Autre',
                ]
            ]))
            ->add('sesActivitesArtistiques', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Arts' => 'Arts',
                    'Musique' => 'Musique',
                    'Couture' => 'Couture',
                    'Cuisine' => 'Cuisine',
                    'Dessin / peinture' => 'Dessin / peinture',
                    'Ecriture' => 'Ecriture',
                    'Photographie' => 'Photographie',
                    'Graphisme' => 'Graphisme',
                    'Vidéo' => 'Vidéo',
                    'Sculpture' => 'Sculpture',
                    'Théâtre / danse' => 'Théâtre / danse',
                    'Autre' => 'Autre',
                ]
            ]))
            ->add('sesActivitesCerebrales', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Esprit' => 'Esprit',
                    'Histoire' => 'Histoire',
                    'Géographie' => 'Géographie',
                    'Esotérisme' => 'Esotérisme',
                    'Philosophie' => 'Philosophie',
                    'Sociologie' => 'Sociologie',
                    'Psychologie' => 'Psychologie',
                    'Politique' => 'Politique',
                    'Sciences' => 'Sciences',
                    'Spiritualité' => 'Spiritualité',
                    'Autre' => 'Autre',
                ]
            ]))
            ->add('sesDivertissements', ChoiceType::class, ([
                'choices'  => [
                    'Tout type' => 'Tout type',
                    'Soirée' => 'Soirée',
                    'Tourisme' => 'Tourisme',
                    'Cinéma / série' => 'Cinéma / série',
                    'Collection' => 'Collection',
                    'Lecture' => 'Lecture',
                    'Expos / musées' => 'Expos / musées',
                    'Informatique' => 'Informatique',
                    'Jeux' => 'Jeux',
                    'Manga' => 'Manga',
                    'Musique' => 'Musique',
                    'Opéra' => 'Opéra',
                    'Théâtre' => 'Théâtre',
                    'Parc de loisirs' => 'Parc de loisirs',
                    'Autre' => 'Autre',
                ]
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Passion::class,
        ]);
    }
}
