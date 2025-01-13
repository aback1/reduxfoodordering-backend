<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $john = new User(
            "1",
            'John Doe',
            password_hash('peppermint', PASSWORD_BCRYPT) // Password is hashed for security
        );
        $manager->persist($john);

        $jane = new User(
            "2",
            'Jane Smith',
            password_hash('strawberries', PASSWORD_BCRYPT) // Password is hashed for security
        );
        $manager->persist($jane);

        $manager->flush();
    }
}
