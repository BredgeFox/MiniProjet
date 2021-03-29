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
        $event1 ->setDescription($description)
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
        $event2 ->setDescription($description)
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

        $event3 ->setDescription($description)
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

        $event4 ->setDescription($description)
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

        $event5 ->setDescription($description)
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

        $event6 ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Berlin")
                ->setAdresse("Rue de berlin")
                ->setDateDebut(new \DateTime('15/05/2021 18:00:00'))
                ->setDateFin(new \DateTime('20/05/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-6')));
        $manager->persist($event6);

        $event7 ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Londres")
                ->setAdresse("Rue de Londres")
                ->setDateDebut(new \DateTime('20/06/2021 18:00:00'))
                ->setDateFin(new \DateTime('25/06/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(10)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-7')));
        $manager->persist($event7);

        $event8 ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Rome")
                ->setAdresse("Rue de Rome")
                ->setDateDebut(new \DateTime('20/07/2021 18:00:00'))
                ->setDateFin(new \DateTime('25/07/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(20)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-8')));
        $manager->persist($event8);

        $event9 ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Madrid")
                ->setAdresse("Rue de Madrid")
                ->setDateDebut(new \DateTime('20/07/2021 18:00:00'))
                ->setDateFin(new \DateTime('25/07/2021 23:59:59'))
                // ->setDateDebut(DATE(DateTime()))
                // ->setDateFin(DATE(DateTime()))
                ->setCotisation(30)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-9')));
        $manager->persist($event9);

        $manager->flush();

        $this->addReference('Evenement-1', $event1);
        $this->addReference('Evenement-2', $event2);
        $this->addReference('Evenement-1', $event3);
        $this->addReference('Evenement-2', $event4);
        $this->addReference('Evenement-2', $event5);
        $this->addReference('Evenement-1', $event6);
        $this->addReference('Evenement-2', $event7);
        $this->addReference('Evenement-1', $event8);
        $this->addReference('Evenement-2', $event9);

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

?>
