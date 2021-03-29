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

        $user6 = new Utilisateur();
        $user6  ->setPrenom('Pierre')
                ->setNom('Autret')
                ->setEmail('Autret@gmail.com')
                ->setTel('0611121314')
                ->setIdRole($manager->merge($this->getReference('Role-Partenaire')));
        $manager->persist($user6);

        $user7 = new Utilisateur();
        $user7  ->setPrenom('Antoine')
                ->setNom('Dijoux')
                ->setEmail('Dijoux@gmail.com')
                ->setTel('0615161718')
                ->setIdRole($manager->merge($this->getReference('Role-Partenaire')));
        $manager->persist($user7);

        $user8 = new Utilisateur();
        $user8  ->setPrenom('Timothe')
                ->setNom('Labal')
                ->setEmail('Labal@gmail.com')
                ->setTel('0619202122')
                ->setIdRole($manager->merge($this->getReference('Role-Etudiant')));
        $manager->persist($user8);

        $user9 = new Utilisateur();
        $user9  ->setPrenom('Thomas')
                ->setNom('Dupré')
                ->setEmail('tata@gmail.com')
                ->setTel('0623242526')
                ->setIdRole($manager->merge($this->getReference('Role-Etudiant')));
        $manager->persist($user9);

        $user10 = new Utilisateur();
        $user10  ->setPrenom('Jacques')
                ->setNom('Jean')
                ->setEmail('jean@gmail.com')
                ->setTel('0626272829')
                ->setIdRole($manager->merge($this->getReference('Role-Adhérent')));
        $manager->persist($user10);

        $user11 = new Utilisateur();
        $user11  ->setPrenom('Jeanne')
                ->setNom('Ruyer')
                ->setEmail('ruyer@gmail.com')
                ->setTel('0630313233')
                ->setIdRole($manager->merge($this->getReference('Role-Adhérent')));
        $manager->persist($user11);

        $user12 = new Utilisateur();
        $user12  ->setPrenom('Pablo')
                ->setNom('Picasso')
                ->setEmail('Picasso@gmail.com')
                ->setTel('0634353637')
                ->setIdRole($manager->merge($this->getReference('Role-Organisateur')));
        $manager->persist($user12);

        $user13 = new Utilisateur();
        $user13  ->setPrenom('Paulo')
                ->setNom('Legrand')
                ->setEmail('Legrand@gmail.com')
                ->setTel('0637383940')
                ->setIdRole($manager->merge($this->getReference('Role-Président')));
        $manager->persist($user13);

        $manager->flush();

        $this->addReference('User-1', $user1);
        $this->addReference('User-2', $user2);
        $this->addReference('User-3', $user3);
        $this->addReference('User-4', $user4);
        $this->addReference('User-5', $user5);
        $this->addReference('User-6', $user6);
        $this->addReference('User-7', $user7);
        $this->addReference('User-8', $user8);
        $this->addReference('User-9', $user9);
        $this->addReference('User-10', $user10);
        $this->addReference('User-11', $user11);
        $this->addReference('User-12', $user12);
        $this->addReference('User-13', $user13);
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
