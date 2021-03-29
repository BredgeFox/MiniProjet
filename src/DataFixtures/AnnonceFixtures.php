<?php
namespace App\DataFixtures;

use App\Entity\Annonce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AnnonceFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $ann1 = new Annonce();
        $ann1   ->setContenu('Annonce 1')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-1')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($ann1);

        $ann2 = new Annonce();
        $ann2   ->setContenu('Annonce 2')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-2')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-1')));
        $manager->persist($ann2);

        $ann3 = new Annonce();
        $ann3   ->setContenu('Annonce 3')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-3')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-3')));
        $manager->persist($ann3);

        $ann4 = new Annonce();
        $ann4   ->setContenu('Annonce 4')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-4')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-4')));
        $manager->persist($ann4);

        $ann5 = new Annonce();
        $ann5   ->setContenu('Annonce 5')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-5')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-5')));
        $manager->persist($ann5);

        $ann6 = new Annonce();
        $ann6   ->setContenu('Annonce 6')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-1')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($ann6);

        $ann7 = new Annonce();
        $ann7   ->setContenu('Annonce 7')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-2')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-1')));
        $manager->persist($ann7);

        $ann8 = new Annonce();
        $ann8   ->setContenu('Annonce 8')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-3')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-3')));
        $manager->persist($ann8);

        $ann9 = new Annonce();
        $ann9   ->setContenu('Annonce 9')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-4')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-4')));
        $manager->persist($ann9);

        $ann10 = new Annonce();
        $ann10   ->setContenu('Annonce 10')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-5')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-5')));
        $manager->persist($ann10);

        $ann11 = new Annonce();
        $ann11   ->setContenu('Annonce 11')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-6')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-6')));
        $manager->persist($ann11);

        $ann12 = new Annonce();
        $ann12   ->setContenu('Annonce 12')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-6')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-6')));
        $manager->persist($ann12);

        $ann13 = new Annonce();
        $ann13   ->setContenu('Annonce 13')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-7')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-7')));
        $manager->persist($ann13);

        $ann14 = new Annonce();
        $ann14   ->setContenu('Annonce 14')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-7')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-7')));
        $manager->persist($ann14);

        $ann15 = new Annonce();
        $ann15   ->setContenu('Annonce 15')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-8')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-8')));
        $manager->persist($ann15);

        $ann16 = new Annonce();
        $ann16  ->setContenu('Annonce 16')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-8')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-8')));
        $manager->persist($ann16);

        $ann17 = new Annonce();
        $ann17   ->setContenu('Annonce 17')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-9')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-9')));
        $manager->persist($ann17);

        $ann18 = new Annonce();
        $ann18   ->setContenu('Annonce 18')
                ->setImage('')
                ->setIdEvenement($manager->merge($this->getReference('Evenement-9')))
                ->setIdUtilisateur($manager->merge($this->getReference('User-9')));
        $manager->persist($ann18);
        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            UtilisateurFixtures::class,
            EvenementFixtures::class,
        ];
    }
}

?>
