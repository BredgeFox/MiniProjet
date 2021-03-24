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
