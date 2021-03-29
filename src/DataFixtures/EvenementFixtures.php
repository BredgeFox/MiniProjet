<?php
namespace App\DataFixtures;

use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class EvenementFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $event1 = new Evenement();
        $description = <<< _lorem
        Pique nique en plein air, apporté vos casse-croute et éventuelement de quoi pratique une ou deux activités collectives.
        _lorem;
        $event1 ->setTitre('Evenement 1')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Grandchamp des fontaines")
                ->setAdresse("Plan d'eau du Brossais")
                ->setDateDebut(new \DateTime('10/04/2021 14:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 18:00:00'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-Plein-air')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($event1);

        $event2 = new Evenement();
        $description = <<< _lorem
        Une nuit du hack est organisé sur les poste de la bibliothèque univercitaire, venez vous confronter a vos camarade de différente promotion pour savoir qui sont les meilleurs hackeurs
        _lorem;
        $event2 ->setTitre('Evenement 2')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Nantes")
                ->setAdresse("2 Chemin de la Houssinière")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-1')));
        $manager->persist($event2);

        $event3 = new Evenement();
        $event3 ->setTitre('Evenement 3')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Paris")
                ->setAdresse("2 rue mont parnasse")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-3')));
        $manager->persist($event3);

        $event4 = new Evenement();
        $event4 ->setTitre('Evenement 4')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Lyon")
                ->setAdresse("2 rue de la montagne")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-4')));
        $manager->persist($event4);

        $event5 = new Evenement();
        $event5 ->setTitre('Evenement 5')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Nice")
                ->setAdresse("Rue de nice")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-5')));
        $manager->persist($event5);

        $event6 = new Evenement();
        $description = <<< _lorem
        Soirée d'ouverture de site de gestion des événement. Le dévelopement est encore en cour soyez indulgent ;D !
        _lorem;
        $event6 ->setTitre("Soirée d'inauguration du site")
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Internet")
                ->setAdresse("GestionEvenementANEM.fr")
                ->setDateDebut(new \DateTime('07/03/2021 14:00:00'))
                ->setDateFin(new \DateTime('07/03/2021 18:00:00'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-Plein-air')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($event6);

        $manager->flush();

        $this->addReference('Evenement-1', $event1);
        $this->addReference('Evenement-2', $event2);
        $this->addReference('Evenement-3', $event3);
        $this->addReference('Evenement-4', $event4);
        $this->addReference('Evenement-5', $event5);
        $this->addReference('Evenement-6', $event6);

    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            TypeFixtures::class,
            UtilisateurFixtures::class,
        ];
    }
}
