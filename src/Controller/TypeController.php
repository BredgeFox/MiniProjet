<?php

namespace App\Controller;

use App\Entity\Evenement;
//use App\Entity\Type;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    /**
     * @Route("/type", name="type")
     */
    public function index(): Response
    {
        return $this->render('type/index.html.twig', [
            'controller_name' => 'TypeController',
        ]);
    }

    /**
     * Lister uniquement les types comportant des evenements qui
     * n'on pas encore expiré ainsi que leurs evenements !
     * @Route("/type", name="type.list")
     * @return Response
     */
    public function list(TypeRepository $tr) : Response
    {
        $evenements = $tr->getEvenementNonExpires();
        return $this->render(
            'evenement/list.html.twig',
            ['evenements' => $evenements]
        );
    }

    /**
     * Lister uniquement les evenements qui n'ont pas encore expiré, du type dont l'id est transmi en parametre !
     * @Route("/type", name="type.list")
     * @return Evenement[]
     */
    public function getEvenementNonExpires(TypeRepository $tr)
    {
        $evenement = $tr->GetTypeAvecEvenementNonExpires();
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);

        return /*tableau d'événement de la categorie*/;
    }
}
