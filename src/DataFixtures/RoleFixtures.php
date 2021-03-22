<?php
namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RoleFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        //PREMIER TUPPLE
        $role1 = new Role();
        $role1 ->setLibelleRole('Admin');
        $manager->persist($role1);

        //DEUXIEME TUPPLE
        $role2 = new Role();
        $role2 ->setLibelleRole('Partenaire');
        $manager->persist($role2);

        //TROISIEME TUPPLE
        $role3 = new Role();
        $role3 ->setLibelleRole('Etudiant');
        $manager->persist($role3);

        //QUATRIEME TUPPLE
        $role4 = new Role();
        $role4 ->setLibelleRole('Adhérent');
        $manager->persist($role4);

        //CINQUIEME TUPPLE
        $role5 = new Role();
        $role5 ->setLibelleRole('Organisateur');
        $manager->persist($role5);

        //SIXIEME TUPPLE
        $role6 = new Role();
        $role6 ->setLibelleRole('Président');
        $manager->persist($role6);

        $manager->flush();

        $this->addReference('Role-Admin', $role1);
        $this->addReference('Role-Partenaire', $role2);
        $this->addReference('Role-Etudiant', $role3);
        $this->addReference('Role-Adhérent', $role4);
        $this->addReference('Role-Organisateur', $role5);
        $this->addReference('Role-Président', $role6);
    }

}

?>
