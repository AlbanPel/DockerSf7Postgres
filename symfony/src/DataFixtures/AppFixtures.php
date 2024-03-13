<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Brands = ["Peugeot", "Citroën", "Opel", "Renault", "Volkswagen", "Mercedes"];
        $Colors = ["Rouge", "Jaune", "Bleu", "Noir", "Blanc"];

        for ($i = 0; $i < 30; $i++) {
            $car = new Car();
            $car->setName($Brands[array_rand($Brands, 1)]);
            $car->setPrice(mt_rand(10000, 1000000));
            $car->setColor($Colors[array_rand($Colors, 1)]);
            $manager->persist($car);
        }

        $manager->flush();
    }
}
