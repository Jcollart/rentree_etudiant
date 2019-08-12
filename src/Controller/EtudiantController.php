<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
    *  @Route("/tyt", name="etudiant")
     */
    public function index()
    {
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
    /**
    *  @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('etudiant/home.html.twig');
    }
    /**
    *  @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('etudiant/contact.html.twig');
    }
    /**
    *  @Route("/formulexpress", name="express")
     */
    public function express()
    {
        return $this->render('etudiant/formulexpress.html.twig');
    }
    /**
    *  @Route("/formulwarrior", name="warrior")
     */
    public function warrior()
    {
        return $this->render('etudiant/formulwarrior.html.twig');
    }
    /**
    *  @Route("/concourcuisinecuisine", name="concourcuisine")
     */
    public function concourcuisine()
    {
        return $this->render('etudiant/concourcuisine.html.twig');
    }
    /**
    *  @Route("/formulpiquenique", name="piquenique")
     */
    public function piquenique()
    {
        return $this->render('etudiant/formulpiquenique.html.twig');
    }
    /**
    *  @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('etudiant/faq.html.twig');
    }
    /**
    *  @Route("/galerie", name="galerie")
     */
    public function galerie()
    {
        return $this->render('etudiant/galerie.html.twig');
    }
    /**
    *  @Route("/admin", name="admin")
     */
    private function admin()
    {
        return $this->render('etudiant/admin.html.twig');
    }
}   
?>