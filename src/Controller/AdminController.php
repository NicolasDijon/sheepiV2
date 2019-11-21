<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
* @IsGranted("ROLE_ADMIN")
*/
class AdminController extends AbstractController
{
    /**
     * 
     * Controlleur qui retourne la home du dashboard
     * 
     * @Route("/admin", name="admin")
     */
    public function adminDashboard()
    {
        return $this->render('admin/index.html.twig');
    }

    /**
     * 
     * Controlleur qui retourne la page caracteristisque du dashboard
     * 
     * @Route("/admin/caracteristique", name="admin_caracteristique")
     */
    public function caracteristique()
    {
        return $this->render('admin/caracteristique.html.twig');
    }

    /**
     * 
     * Controlleur qui retourne la page localisation du dashboard
     * 
     * @Route("/admin/localisation", name="admin_localisation")
     */
    public function localisation()
    {
        return $this->render('admin/localisation.html.twig');
    }

    /**
     * 
     * Controlleur qui retourne la page connexion du dashboard
     * 
     * @Route("/admin/connexion", name="admin_connexion")
     */
    public function connexion()
    {
        return $this->render('admin/connexion.html.twig');
    }

    /**
     * 
     * Controlleur qui retourne la page signalement du dashboard
     * 
     * @Route("/admin/signalement", name="admin_signalement")
     */
    public function signalement()
    {
        return $this->render('admin/signalement.html.twig');
    }
}
