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

        $user3 = new Utilisateur();
        $user3  ->setPrenom('Antoine')
                ->setNom('Dubois')
                ->setEmail('Antoine@gmail.com')
                ->setTel('0607080808')
                ->setIdRole($manager->merge($this->getReference('Role-Admin')));
        $manager->persist($user3);

        $user4 = new Utilisateur();
        $user4  ->setPrenom('Mathieu')
                ->setNom('Dupont')
                ->setEmail('Mathieu@gmail.com')
                ->setTel('0607080909')
                ->setIdRole($manager->merge($this->getReference('Role-Admin')));
        $manager->persist($user4);

        $user5 = new Utilisateur();
        $user5  ->setPrenom('Merlin')
                ->setNom('Enchanteur')
                ->setEmail('Merlin@gmail.com')
                ->setTel('0607090909')
                ->setIdRole($manager->merge($this->getReference('Role-Admin')));
        $manager->persist($user5);

        $manager->flush();

        $this->addReference('User-1', $user1);
        $this->addReference('User-2', $user2);
        $this->addReference('User-3', $user3);
        $this->addReference('User-4', $user4);
        $this->addReference('User-5', $user5);
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
