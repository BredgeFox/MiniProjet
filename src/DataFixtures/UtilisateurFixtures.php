<?php
namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UtilisateurFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $user1 = new Utilisateur();
        $user1  ->setPrenom('Paul')
                ->setNom('Labal')
                ->setEmail('paulL@gmail.com')
                ->setTel('0606060606')
                ->setIdRole($manager->merge($this->getReference('Role-Admin')));
        $manager->persist($user1);

        $user2 = new Utilisateur();
        $user2  ->setPrenom('Quentin')
                ->setNom('Aubert')
                ->setEmail('quentinA@gmail.com')
                ->setTel('0607070707')
                ->setIdRole($manager->merge($this->getReference('Role-Admin')));
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('User-1', $type1);
        $this->addReference('User-2', $type2);
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            RoleFixtures::class
        ];
    }
}

?>
