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
                ->setDateDebut('10/04/2021')
                ->setDateFin('10/04/2021')
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
                ->setDateDebut('10/04/2021')
                ->setDateFin('10/04/2021')
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-1')));
        $manager->persist($event2);

        $manager->flush();

        $this->addReference('Evenement-1', $event1);
        $this->addReference('Evenement-2', $event2);
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
