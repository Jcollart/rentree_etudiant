<?php

namespace App\Controller;

use App\Entity\ListePoint;
use App\Form\ListePointType;
use App\Repository\ListePointRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/liste/point")
 */
class ListePointController extends AbstractController
{
    /**
     * @Route("/", name="liste_point_index", methods={"GET"})
     */
    public function index(ListePointRepository $listePointRepository): Response
    {
        return $this->render('liste_point/index.html.twig', [
            'liste_points' => $listePointRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="liste_point_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $listePoint = new ListePoint();
        $form = $this->createForm(ListePointType::class, $listePoint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($listePoint);
            $entityManager->flush();

            return $this->redirectToRoute('liste_point_index');
        }

        return $this->render('liste_point/new.html.twig', [
            'liste_point' => $listePoint,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="liste_point_show", methods={"GET"})
     */
    public function show(ListePoint $listePoint): Response
    {
        return $this->render('liste_point/show.html.twig', [
            'liste_point' => $listePoint,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="liste_point_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ListePoint $listePoint): Response
    {
        $form = $this->createForm(ListePointType::class, $listePoint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('liste_point_index');
        }

        return $this->render('liste_point/edit.html.twig', [
            'liste_point' => $listePoint,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="liste_point_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ListePoint $listePoint): Response
    {
        if ($this->isCsrfTokenValid('delete'.$listePoint->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($listePoint);
            $entityManager->flush();
        }

        return $this->redirectToRoute('liste_point_index');
    }
}
