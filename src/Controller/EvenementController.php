<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    // /**
    //  * @Route("/evenement", name="evenement")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('evenement/index.html.twig', [
    //         'controller_name' => 'EvenementController',
    //     ]);
    // }

    // /**
    //  * Lister tous les evenement.
    //  * @Route("/evenement/", name="evenement.list")
    //  * @return Response
    //  */
    // public function list() : Response
    // {
    //  $evenements = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
    //  return $this->render('evenement/list.html.twig', [
    //  'evenements' => $evenements,
    //  ]);
    // }

    /**
     * Lister uniquement les evenements qui n'on pas encore expiré !
     * @Route("/evenement", name="evenement.list")
     * @return Response
     */
    public function list(EvenementRepository $er) : Response
    {
      $evenements = $er->getEvenementNonExpires();
      return $this->render(
        'evenement/list.html.twig',
        ['evenements' => $evenements, 'date' => (new \DateTime)->format('Y-d-m'), 'time' => time()]
      );
    }

    /**
     * Lister uniquement les evenements qui n'on pas encore expiré !
     * @Route("/evenement", name="evenement.listExpire")
     * @return Response
     */
    public function listExpire(EvenementRepository $er) : Response
    {
        $evenements = $er->getEvenementExpires();
        return $this->render(
            'evenement/list.html.twig',
            ['evenements' => $evenements]
        );
    }

    /**
     * Chercher et afficher un evenement.
     * @Route("/evenement/{id}", name="evenement.show", requirements={"id" = "\d+"})
     * @param Evenement $evenement
     * @return Response
     */
    public function show(Evenement $evenement) : Response
    {
     return $this->render('evenement/show.html.twig', [
     'evenement' => $evenement,
     ]);
    }
}
