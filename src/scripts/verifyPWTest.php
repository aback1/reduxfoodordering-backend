<?php

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

require '../../vendor/autoload.php';

// The hashed password (bcrypt format)
$hash = '$2y$12$wqSW9K8UeID3noBa6M8/OuvwiqJkNCTiwkrEaO232skSGntlELyHS'; // Hashed "peppermint"
$password = 'peppermint';

// Create the PasswordHasherFactory with the desired hashing algorithm
$factory = new PasswordHasherFactory([
    'common' => ['algorithm' => 'bcrypt'],
]);

// Retrieve the hasher instance for 'common' algorithm
$hasher = $factory->getPasswordHasher('common');

// Verify if the provided password matches the hash
var_dump($hasher->verify($hash, $password)); // Should return true if matching
