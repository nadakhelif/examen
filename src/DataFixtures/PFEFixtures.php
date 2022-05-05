<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PFEFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for($i = 0 ; $i< 20 ; $i++) {
            $repo = $manager->getRepository(\App\Entity\Entreprise::class);
            $random = rand(1,20);
            $entreprise =$repo->findOneBy(['id'=>"$random"], []);
            $pfe = new \App\Entity\PFE();

            $pfe->setStudent($faker->name);
            $pfe->setTitre("PFE" . $i);
            $pfe->setEntreprise($entreprise);
            $manager->persist($pfe);
        }
        $manager->flush();

        
    }
}
