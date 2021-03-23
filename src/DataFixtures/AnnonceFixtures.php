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
