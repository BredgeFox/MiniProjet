<?php

namespace App\Controller;

use App\Entity\Type;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    // /**
    //  * @Route("/type", name="type")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('type/index.html.twig', [
    //         'controller_name' => 'TypeController',
    //     ]);
    // }

    /**
     * Lister uniquement les types comportant des evenements qui
     * n'on pas encore expiré ainsi que leurs evenements !
     * @Route("/type", name="type.list")
     * @return Response
     */
    public function list(TypeRepository $tr) : Response
    {
        $types = $tr->GetTypeAvecEvenementNonExpires();

        foreach($types as $type)
        {
            $type['evenements'] = $type->GetEvenementNonExpires();
        }

        return $this->render(
            'type/list.html.twig',
            ['types' => $types]
        );
    }

    /**
     * Lister uniquement les types comportant des evenements qui
     * on déjà expiré ainsi que leurs evenements !
     * @Route("/type", name="type.listExpire")
     * @return Response
     */
    public function listExpire(TypeRepository $tr) : Response
    {
        $types = $tr->GetTypeAvecEvenementExpires();

        foreach($types as $type)
        {
            $type['evenements'] = $type->GetEvenementExpires();
        }

        return $this->render(
            'type/list.html.twig',
            ['types' => $types]
        );
    }

}
