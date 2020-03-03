<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Image;
use App\Entity\Passion;
use App\Entity\Physique;
use App\Entity\Situation;
use App\Entity\Personnalite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');

        $adminUser = new User();
        $adminUser->setEmail('raphael@symfony.com')
                            ->setPassword($this->encoder->encodePassword($adminUser, 'password'))
                            ->setRoles(['ROLE_ADMIN'])
                            ->setUserName('Raphael');

        $manager->persist($adminUser);

        //Nous gérons les utilisateurs
        $users = [];

        for($i = 1; $i <=30; $i++){
            $user = new User();
            
            $hash = $this->encoder->encodePassword($user, 'password');

            //Situation d'un utilisateur
            $situation = new Situation();

            $sexe = [
                'Homme' => 'Homme', 
                'Femme' => 'Femme',
                'Non-binaire' => 'Non-binaire'
            ];

            $monAge = mt_rand(18, 80);
            $sonAge = mt_rand(18, 80);
            $monPays = $faker->country();
            $sonPays = $faker->country();
            $monDepartement = $faker->postcode();
            $sesDepartement = $faker->postcode();
            $maVille = $faker->city();
            $saVille = $faker->city();
            $monTelephone = $faker->phoneNumber();
            $sonTelephone = $faker->phoneNumber();
            $mesEnfants = mt_rand(0, 3);
            $sesEnfants = mt_rand(0, 3);
            $mesOrigines = $faker->word();
            $sesOrigines = $faker->word();

            $situation->setMonSexe(array_rand($sexe))
                            ->setMonAge($monAge)
                            ->setMonPays($monPays)
                            ->setMonDepartement($monDepartement)
                            ->setMaVille($maVille)
                            ->setMonTelephone($monTelephone)
                            ->setMesEnfants($mesEnfants)
                            ->setMesOrigines($mesOrigines)
                            ->setSonSexe(array_rand($sexe))
                            ->setSonAge($sonAge)
                            ->setSonPays($sonPays)
                            ->setSesDepartements($sesDepartement)
                            ->setSesEnfants($sesEnfants)
                            ->setSesOrigines($sesOrigines)
                            ->addUser($user);

            //Personnalité d'un utilisateur
            $personnalite = new Personnalite();

            $niveauEtude = [
                'BEPC / Brevet des collèges' => 'BEPC / Brevet des collèges',
                'BEP / CAP' => 'BEP / CAP',
                'BAC' => 'BAC',
                'BAC +2' => 'BAC +2',
                'BAC +3' => 'BAC +3',
                'BAC +4' => 'BAC +4',
                'BAC +5 et plus...' => 'BAC +5 et plus...',
            ];
            $monJob = $faker->jobTitle();
            $caractere = [
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
            ];
            $petitesAddictions = [
                'Cigarette' => 'Cigarette',
                'Alcool' => 'Alcool',
                'Jeux video' => 'Jeux video',
                'Téléphone' => 'Téléphone',
                'Aucune' => 'Aucune',
            ];
            $convictionsSpirituelles = [
                "L'athéisme" => "L'athéisme",
                'Le christianisme' => 'Le christianisme',
                "L'islam" => "L'islam",
                "L'hindouisme" => "L'hindouisme",
                'Les religions chinoises' => 'Les religions chinoises',
                'Le bouddhisme' => 'Le bouddhisme',
                'Les religions africaines' => 'Les religions africaines',
                'Le judaisme' => 'Le judaisme',
                "D'autres religions" => "D'autres religions",
            ];

            $personnalite->setMonNiveauEtude(array_rand($niveauEtude))
                                ->setMonJob($monJob)
                                ->setMonCaractere(array_rand($caractere))
                                ->setMesPetitesAddictions(array_rand($petitesAddictions))
                                ->setMesConvictionsSpirituelles(array_rand($convictionsSpirituelles))
                                ->setSonNiveauEtude(array_rand($niveauEtude))
                                ->setSonCaractere(array_rand($caractere))
                                ->setSesConvictionsSpirituelles(array_rand($convictionsSpirituelles))
                                ->setSesPetitesAddictions(array_rand($petitesAddictions))
                                ->addUser($user);

            //Physique de l'utilisateur
            $physique = new Physique();

            $maTaille = $faker->numberBetween($min = 130, $max = 300);
            $silhouette = [
                'Mince' => 'Mince',
                'Sportive' => 'Sportive',
                'Normale' => 'Normale',
                'Pulpeuse' => 'Pulpeuse',
                'Ronde' => 'Ronde',
            ];
            $cheveux = [
                'Blonds' => 'Blonds',
                'Bruns' => 'Bruns',
                'Poivres/sel' => 'Poivres/sel',
                'Roux' => 'Roux',
            ];
            $yeux = [
                'Bleus' => 'Bleus',
                'Verts' => 'Verts',
                'Marrons' => 'Marrons',
                'Noirs' => 'Noirs',
                'Gris' => 'Gris',
            ];
            $signesParticuliers = [
                'Des tatouages' => 'Des tatouages',
                'Des piercings' => 'Des piercings',
                'Des lunettes' => 'Des lunettes',
                'Aucun signe particulier' => 'Aucun signe particulier',
            ];
            $style = [
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
            ];
            $saTaille = $faker->numberBetween($min = 130, $max = 300);

            $physique->setMaTaille($maTaille)
                            ->setMaSilhouette(array_rand($silhouette))
                            ->setMesCheveux(array_rand($cheveux))
                            ->setMesYeux(array_rand($yeux))
                            ->setMesSignesParticuliers(array_rand($signesParticuliers))
                            ->setMonStyle(array_rand($style))
                            ->setSaTaille($saTaille)
                            ->setSaSilhouette(array_rand($silhouette))
                            ->setSesCheveux(array_rand($cheveux))
                            ->setSesYeux(array_rand($yeux))
                            ->setSesSignesParticuliers(array_rand($signesParticuliers))
                            ->setSesStyles(array_rand($style))
                            ->addUser($user);

            //Passions de l'utilisateur
            $passion = new Passion();

            $activitesSportives = [
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
            ];
            $activitesNaturelles = [
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
            ];
            $activitesArtistiques = [
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
            ];
            $activitesCerebrales = [
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
            ];
            $divertissements = [
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
            ];

            $passion->setMesActivitesSportives(array_rand($activitesSportives))
                        ->setMesActivitesNaturelles(array_rand($activitesNaturelles))
                        ->setMesActivitesArtistiques(array_rand($activitesArtistiques))
                        ->setMesActivitesCerebrales(array_rand($activitesCerebrales))
                        ->setMesDivertissements(array_rand($divertissements))
                        ->setSesActivitesSportives(array_rand($activitesSportives))
                        ->setSesActivitesNaturelles(array_rand($activitesNaturelles))
                        ->setSesActivitesArtistiques(array_rand($activitesArtistiques))
                        ->setSesActivitesCerebrales(array_rand($activitesCerebrales))
                        ->setSesDivertissements(array_rand($divertissements))
                        ->addUser($user);

            //Gestion des images de l'utilisateur
            for($j = 1; $j <= mt_rand(2, 5); $j++){
                $image = new Image();

                $image->setUrl($faker->imageUrl())
                            ->setUser($user);

                $manager->persist($image);
            }

            $user->setUserName($faker->firstname())
                    ->setEmail($faker->email)
                    ->setPassword($hash)
                    ->setRoles(['ROLE_USER'])
                    ->setSituation($situation)
                    ->setPersonnalite($personnalite)
                    ->setPhysique($physique)
                    ->setPassion($passion);

            $manager->persist($passion);
            $manager->persist($physique);
            $manager->persist($personnalite);
            $manager->persist($situation);
            $manager->persist($user);
            $users[] = $user;
        }

        

            /*for($j = 1; $j <= mt_rand(2, 5); $j++){
                $image = new Image();

                $image->setUrl($faker->imageUrl())
                            ->setCaption($faker->sentence())
                            ->setAd($ad);

                $manager->persist($image);
            }

            //Gestion des réservations
            for($j = 1; $j <= mt_rand(0, 10); $j++){
                $booking = new Booking();

                $createdAt = $faker->dateTimeBetween('-6 month');
                $startDate = $faker->dateTimeBetween('-3 month');

                $duration = mt_rand(3, 10);

                $endDate = (clone $startDate)->modify("+$duration days");
                $amount = $ad->getPrice() * $duration;

                $booker = $users[mt_rand(0, count($users) -1)];

                $comment = $faker->paragraph();

                $booking->setBooker($booker)
                                ->setAd($ad)
                                ->setStartDate($startDate)
                                ->setEndDate($endDate)
                                ->setCreatedAt($createdAt)
                                ->setAmount($amount)
                                ->setComment($comment);

                $manager->persist($booking);

                //Gestion des commentaires
                if(mt_rand(0, 1)){
                    $comment = new Comment();
                    $comment->setContent($faker->paragraph())
                                    ->setRating(mt_rand(1, 5))
                                    ->setAuthor($booker)
                                    ->setAd($ad);
                                    
                    $manager->persist($comment);
                }
            }*/

        

        $manager->flush();
    }
}
