<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Etudiant;
use App\Entity\Formulaire;
use App\Entity\Equipe;

//use App\etudiant\for

use App\Form\FormulaireType;

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
    public function express(Request $request, ObjectManager $manager)
    {
        $student = new Etudiant();
        

      
        $form = $this->createForm(InscripType::class, $student);
        return $this->render('etudiant/formulexpress.html.twig',[
            'formStudent' => $form->createView(),
        ]);

    }
    /**
    *  @Route("/formulwarrior", name="warrior")
     */
    public function warrior(Request $request, ObjectManager $manager)
    {
        $student = new Etudiant();
        $formul = $this->createForm(FormulaireType::class, $student);
        $formul->handleRequest($request);

        If($formul->isSubmitted() && $formul->isValid()){
            $manager->persist($student);
            $manager->flush();
        }
    
        return $this->render('etudiant/formulwarrior.html.twig',[
        'formStudent' => $formul->createView(),
        ]);

    }
    /**
    *  @Route("/concourcuisine", name="concourcuisine")
     */
    public function cuisine()
    {
        return $this->render('etudiant/formulcuisine.html.twig');
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
    public function admin()
    {
        return $this->render('etudiant/admin.html.twig');
    }
    /**
    *  @Route("/modification", name="modification")
     */
    public function modification()
    {
        return $this->render('etudiant/modificationadmin.html.twig');
    }
    /**
    *  @Route("/modiformulaire", name="modiformulaire")
     */
    public function modiformulaire()
    {
        return $this->render('etudiant/modiformulaire.html.twig');
    }
    /**
    *  @Route("/verification", name="verification")
     */
    public function verification()
    {
        return $this->render('etudiant/verification.php.twig');
    }
}   


?>