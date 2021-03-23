<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement", name="evenement")
     */
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    /**
     * Lister tous les evenement.
     * @Route("/evenement/", name="evenement.list")
     * @return Response
     */
    public function list() : Response
    {
     $evenements = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
     return $this->render('evenement/list.html.twig', [
     'evenements' => $evenements,
     ]);
    }
}
