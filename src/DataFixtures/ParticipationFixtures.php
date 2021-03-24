<?php
namespace App\DataFixtures;

use App\Entity\Participation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipationFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $part1 = new Participation();
        $part1  ->setIdUtilisateur($manager->merge($this->getReference('User-2')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-1')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part1);

        $part2 = new Participation();
        $part2  ->setIdUtilisateur($manager->merge($this->getReference('User-1')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-2')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part2);

        $part3 = new Participation();
        $part3  ->setIdUtilisateur($manager->merge($this->getReference('User-3')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-3')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part3);

        $part4 = new Participation();
        $part4  ->setIdUtilisateur($manager->merge($this->getReference('User-4')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-4')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part3);

        $part5 = new Participation();
        $part5  ->setIdUtilisateur($manager->merge($this->getReference('User-5')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-5')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part5);

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
