<?php

namespace App\DataFixtures;

use App\Entity\Food;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FoodFixtures extends Fixture
{
    public function load(ObjectManager $manager): void // Add ": void" here
    {
        $food1 = new Food();
        $food1->setName('Cheese Burger')
              ->setType('Burger')
              ->setPrice(5.99);
        $manager->persist($food1);

        $food2 = new Food();
        $food2->setName('Pizza Funghi')
              ->setType('Pizza')
              ->setPrice(8.99);
        $manager->persist($food2);

        $food3 = new Food();
        $food3->setName('Caesars Salad')
              ->setType('Salad')
              ->setPrice(4.99);
        $manager->persist($food3);

        $food4 = new Food();
        $food4->setName('Caprese Salad')
              ->setType('Salad')
              ->setPrice(6.99);
        $manager->persist($food4);

        $food5 = new Food();
        $food5->setName('Coleslaw')
              ->setType('Salad')
              ->setPrice(5.99);
        $manager->persist($food5);

        $food6 = new Food();
        $food6->setName('Greek Salad')
              ->setType('Salad')
              ->setPrice(7.99);
        $manager->persist($food6);

        $food7 = new Food();
        $food7->setName('Green Salad')
              ->setType('Salad')
              ->setPrice(3.99);
        $manager->persist($food7);

        $food8 = new Food();
        $food8->setName('Pizza Margherita')
              ->setType('Pizza')
              ->setPrice(8.99);
        $manager->persist($food8);

        $food9 = new Food();
        $food9->setName('Pizza Prosciuotto')
              ->setType('Pizza')
              ->setPrice(10.99);
        $manager->persist($food9);

        $food10 = new Food();
        $food10->setName('Pizza Salamino')
              ->setType('Pizza')
              ->setPrice(12.99);
        $manager->persist($food10);

        $food11 = new Food();
        $food11->setName('Pizza Spinaci')
              ->setType('Pizza')
              ->setPrice(11.99);
        $manager->persist($food11);

        $food12 = new Food();
        $food12->setName('Flank Steak')
              ->setType('Steak')
              ->setPrice(17.99);
        $manager->persist($food12);

        $food13 = new Food();
        $food13->setName('Ribeye Steak')
              ->setType('Steak')
              ->setPrice(19.99);
        $manager->persist($food13);

        $food14 = new Food();
        $food14->setName('Sirloin Steak')
              ->setType('Steak')
              ->setPrice(24.99);
        $manager->persist($food14);

        $food15 = new Food();
        $food15->setName('Tbone Steak')
              ->setType('Steak')
              ->setPrice(24.99);
        $manager->persist($food15);

        $food16 = new Food();
        $food16->setName('Tomahawk Steak')
              ->setType('Steak')
              ->setPrice(19.99);
        $manager->persist($food16);

        $food17 = new Food();
        $food17->setName('Bacon Burger')
              ->setType('Burger')
              ->setPrice(14.99);
        $manager->persist($food17);

        $food18 = new Food();
        $food18->setName('Chicken Burger')
              ->setType('Burger')
              ->setPrice(16.99);
        $manager->persist($food18);

        $food19 = new Food();
        $food19->setName('Double Patty Burger')
              ->setType('Burger')
              ->setPrice(18.99);
        $manager->persist($food19);

        $food20 = new Food();
        $food20->setName('Veggie Burger')
              ->setType('Burger')
              ->setPrice(11.99);
        $manager->persist($food20);



        $manager->flush();
    }
}
