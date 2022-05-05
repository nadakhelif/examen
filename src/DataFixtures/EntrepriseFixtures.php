<?php

namespace App\DataFixtures;

use App\Entity\Entreprise as EntityEntreprise;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EntrepriseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i < 20; $i++) {
            $entreprise = new EntityEntreprise();
            $entreprise->setName("Entreprise$i");
            $manager->persist($entreprise);
        }
        $manager->flush();

        $manager->flush();
    }
}
