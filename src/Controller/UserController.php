<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Situation;
use App\Form\PassionType;
use App\Form\ReglageType;
use App\Form\PhysiqueType;
use App\Form\SituationType;
use App\Form\PersonnaliteType;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index( Request $request, UserInterface $user ) : Response
    {
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/user/abonnement", name="user_abonnement")
     */
    public function abonnement()
    {
        return $this->render('user/abonnement.html.twig', [
        ]);
    }

    /**
     * @Route("/user/resultats", name="user_resultats")
     */
    public function resultats()
    {
        $users = $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findAll()
        ;

        return $this->render('user/resultats.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/user/infos/situation", name="user_infos_situation")
     */
    public function infos_situation(Request $request, UserInterface $user)
    {
        $situation = $user->getSituation();

        $form = $this->createForm(SituationType::class, $situation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_situation');
        }

        return $this->render('user/infos_situation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/infos/physique", name="user_infos_physique")
     */
    public function infos_physique(Request $request, UserInterface $user)
    {
        $physique = $user->getPhysique();

        $form = $this->createForm(PhysiqueType::class, $physique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_physique');
        }

        return $this->render('user/infos_physique.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/infos/personnalite", name="user_infos_personnalite")
     */
    public function infos_personnalite(Request $request, UserInterface $user)
    {
        $personnalite = $user->getPersonnalite();

        $form = $this->createForm(PersonnaliteType::class, $personnalite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_personnalite');
        }

        return $this->render('user/infos_personnalite.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/infos/passion", name="user_infos_passion")
     */
    public function infos_passion(Request $request, UserInterface $user)
    {
        $passion = $user->getPassion();

        $form = $this->createForm(PassionType::class, $passion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_passion');
        }

        return $this->render('user/infos_passions.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/infos/reglage", name="user_infos_reglage")
     */
    public function infos_reglage(Request $request, UserInterface $user, UserPasswordEncoderInterface $encoder, ObjectManager $manager)
    {
        $form_edit_user = $this->createform(RegistrationType::class, $user);

        $form_edit_user->handleRequest($request);

        if($form_edit_user->isSubmitted() && $form_edit_user->isValid()){
            
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $role = $request->request->get('role');
            $user->setRoles(["ROLE_USER"]);
            $user->setIsActive(true);
            $manager->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_reglage');
        }

        $reglage = $user->getReglage();

        $form = $this->createForm(ReglageType::class, $reglage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Vos informations ont bien été modifiées :)");

            return $this->redirectToRoute('user_infos_reglage');
        }

        return $this->render('user/infos_reglages.html.twig', [
            'form' => $form->createView(),
            'form_edit_user' => $form_edit_user->createView(),
        ]);
    }

    /**
     * @Route("/{id}/voir", name="user_voir_profile")
     */
    public function voir(Request $request, User $user): Response
    {
        return $this->render('user/voir.html.twig', [
            'user'  => $user,
        ]);
    }
}
