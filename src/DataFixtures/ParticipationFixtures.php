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

        $part6 = new Participation();
        $part6  ->setIdUtilisateur($manager->merge($this->getReference('User-6')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-6')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part6);

        $part7 = new Participation();
        $part7  ->setIdUtilisateur($manager->merge($this->getReference('User-7')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-7')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part7);

        $part8 = new Participation();
        $part8  ->setIdUtilisateur($manager->merge($this->getReference('User-8')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-8')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part8);

        $part9 = new Participation();
        $part9  ->setIdUtilisateur($manager->merge($this->getReference('User-9')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-9')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part9);

        $part10 = new Participation();
        $part10  ->setIdUtilisateur($manager->merge($this->getReference('User-10')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-1')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part10);

        $part11 = new Participation();
        $part11  ->setIdUtilisateur($manager->merge($this->getReference('User-11')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-2')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part11);

        $part12 = new Participation();
        $part12  ->setIdUtilisateur($manager->merge($this->getReference('User-12')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-3')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part12);

        $part13 = new Participation();
        $part13  ->setIdUtilisateur($manager->merge($this->getReference('User-13')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-4')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part13);

        $part14 = new Participation();
        $part14  ->setIdUtilisateur($manager->merge($this->getReference('User-1')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-5')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part14);

        $part15 = new Participation();
        $part15  ->setIdUtilisateur($manager->merge($this->getReference('User-2')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-6')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part15);

        $part16 = new Participation();
        $part16  ->setIdUtilisateur($manager->merge($this->getReference('User-3')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-7')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part16);

        $part17 = new Participation();
        $part17  ->setIdUtilisateur($manager->merge($this->getReference('User-4')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-8')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part17);

        $part18 = new Participation();
        $part18  ->setIdUtilisateur($manager->merge($this->getReference('User-5')))
                ->setIdEvenement($manager->merge($this->getReference('Evenement-9')))
                ->setCommentaire('')
                ->setCotisation(true);
        $manager->persist($part18);

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
