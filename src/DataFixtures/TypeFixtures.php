<?php
namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TypeFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        //PREMIER TUPPLE
        $type1 = new Type();
        $type1 ->setLibelleType('Plein-air');
        $manager->persist($type1);

        //DEUXIEME TUPPLE
        $type2 = new Type();
        $type2 ->setLibelleType('Escape game');
        $manager->persist($type2);

        //TROISIEME TUPPLE
        $type3 = new Type();
        $type3 ->setLibelleType('LAN');
        $manager->persist($type3);

        //QUATRIEME TUPPLE
        $type4 = new Type();
        $type4 ->setLibelleType('Karaoké');
        $manager->persist($type4);

        //CINQUIEME TUPPLE
        $type5 = new Type();
        $type5 ->setLibelleType('Blind-test');
        $manager->persist($type5);

        //SIXIEME TUPPLE
        $type6 = new Type();
        $type6 ->setLibelleType('Indor');
        $manager->persist($type6);

        $manager->flush();

        $this->addReference('Type-Plein-air', $type1);
        $this->addReference('Type-Escape game', $type2);
        $this->addReference('Type-LAN', $type3);
        $this->addReference('Type-Karaoké', $type4);
        $this->addReference('Type-Blind-test', $type5);
        $this->addReference('Type-Indor', $type6);
    }

}

?>
