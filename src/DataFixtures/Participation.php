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
                ->setCommentaire()
                ->setCotisation(true);
        $manager->persist($part1);

        $part2 = new Participation();
        $part2  ->setIdUtilisateur($manager->merge($this->getReference('User-2')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-1')))
                ->setCommentaire()
                ->setCotisation(true);
        $manager->persist($part2);

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            UtilisateurFixtures::class,
            ParticipationFixtures::class,
        ];
    }
}

?>
