<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * Controlleur qui affiche la home page
     */
    public function home()
    {
        return $this->render('home/home.html.twig', [
        ]);
    }

    /**
     * @Route("/sheepi", name="home_sheepi")
     * Controlleur qui affiche la page sheepi
     */
    public function sheepi()
    {
        return $this->render('home/sheepi.html.twig', [
        ]);
    }

    /**
     * @Route("/faq", name="home_faq")
     * Controlleur qui affiche la page faq
     */
    public function faq()
    {
        return $this->render('home/faq.html.twig', [
        ]);
    }

    /**
     * @Route("/mentions", name="home_mentions")
     * Controlleur qui affiche la page mentions légales
     */
    public function mentions()
    {
        return $this->render('home/mentions.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="home_contact")
     * Controlleur qui affiche la page de contact
     */
    public function contact(Request $request)
    {
        $form = $this->createform(ContactType::class);

        $form->handleRequest($request);

        return $this->render('home/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
