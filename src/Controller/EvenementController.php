<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        ['evenements' => $evenements]
      );
    }

    /**
     * Lister uniquement les evenements qui n'on pas encore expiré !
     * @Route("/evenement", name="evenement.expire")
     * @return Response
     */
    public function expire(EvenementRepository $er) : Response
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

    /**
     * Créer un nouvel evenement.
     * @Route("/nouvel-evenement", name="evenement.create")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return RedirectResponse|Response
     */
    public function create(Request $request, EntityManagerInterface $em) : Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('evenement.list');
        }
        return $this->render('evenement/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edite un evenement existant.
     * @Route("/modif-evenement/{id}", name="evenement.edit", requirements={"id" = "\d+"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return RedirectResponse|Response
     */
    public function edit(Request $request, EntityManagerInterface $em, Evenement $evenement) : Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('evenement.list');
        }
        return $this->render('evenement/edit.html.twig', [
            'form' => $form->createView(),
            'evenement' => $evenement/*[
                'id' => $evenement->getId(),
                'titre' => $evenement->getTitre()
            ]*/
        ]);
    }

    /**
     * Supprimer un evenement.
     * @Route("/delete-evenement/{id}", name="evenement.delete", requirements={"id" = "\d+"})
     * @param Request $request
     * @param Evenement $evenement
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $em) : Response
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement.delete', ['id' => $evenement->getId()]))
            ->getForm();
        $form->handleRequest($request);
        if ( ! $form->isSubmitted() || ! $form->isValid()) {
            return $this->render('evenement/delete.html.twig', [
                'evenement' => $evenement,
                'form' => $form->createView(),
            ]);
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('evenement.list');
    }

}
