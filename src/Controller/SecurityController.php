<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Passion;
use App\Entity\Reglage;
use App\Entity\Physique;
use App\Entity\Situation;
use App\Form\PassionType;
use App\Form\ReglageType;
use App\Form\PhysiqueType;
use App\Entity\SesOrigines;
use App\Form\SituationType;
use App\Entity\Personnalite;
use App\Form\PersonnaliteType;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * Controller used to manage the application security.
 * See https://symfony.com/doc/current/cookbook/security/form_login_setup.html.
 *
 */
class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="security_login")
     */
    public function login()
    {
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in config/packages/security.yaml
     *
     * @Route("/logout", name="security_logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }

    /**
     * Controlleur qui retourne la page d'inscription 
     * et qui affiche le formulaire d'inscription 
     * 
     * @route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();

        $form = $this->createform(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $role = $request->request->get('role');
            $user->setRoles(["ROLE_USER"]);
            $user->setIsActive(true);
            $manager->persist($user);
            $manager->flush();

            $token = new UsernamePasswordToken(
                $user,
                $hash,
                'main',
                $user->getRoles()
            );

            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));

            return $this->redirectToRoute('security_registration_situation');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/situation", name="security_registration_situation")
     */
    public function situation(Request $request, ObjectManager $manager, UserInterface $user)
    {
        $situation = new Situation();

        $form = $this->createform(SituationType::class, $situation);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setSituation($situation);
            $manager->persist($situation);
            $manager->flush();

            return $this->redirectToRoute('security_registration_physique');
        }

        return $this->render('security/registration_situation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/physique", name="security_registration_physique")
     */
    public function physique(Request $request, ObjectManager $manager, UserInterface $user)
    {
        $physique = new Physique();

        $form = $this->createform(PhysiqueType::class, $physique);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPhysique($physique);
            $manager->persist($physique);
            $manager->flush();

            return $this->redirectToRoute('security_registration_personnalite');
        }

        return $this->render('security/registration_physique.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/personnalite", name="security_registration_personnalite")
     */
    public function personnalite(Request $request, ObjectManager $manager, UserInterface $user)
    {
        $personnalite = new Personnalite();

        $form = $this->createform(PersonnaliteType::class, $personnalite);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPersonnalite($personnalite);
            $manager->persist($personnalite);
            $manager->flush();

            return $this->redirectToRoute('security_registration_passions');
        }

        return $this->render('security/registration_personnalite.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/passions", name="security_registration_passions")
     */
    public function passion(Request $request, ObjectManager $manager, UserInterface $user)
    {
        $passion = new Passion();

        $form = $this->createform(PassionType::class, $passion);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPassion($passion);
            $manager->persist($passion);
            $manager->flush();

            return $this->redirectToRoute('security_registration_reglages');
        }

        return $this->render('security/registration_passions.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/reglages", name="security_registration_reglages")
     */
    public function reglages(Request $request, ObjectManager $manager, UserInterface $user)
    {
        $reglage = new Reglage();

        $form = $this->createform(ReglageType::class, $reglage);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setReglage($reglage);
            $manager->persist($reglage);
            $manager->flush();

            return $this->redirectToRoute('security_registration_confirmation');
        }

        return $this->render('security/registration_reglages.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/confirmation", name="security_registration_confirmation")
     */
    public function confirmation()
    {
        return $this->render('security/registration_confirmation.html.twig', [

        ]);
    }
}

    
