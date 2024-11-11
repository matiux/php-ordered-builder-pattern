<?php

declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Matiux\PhpOrderedBuilderPattern\UserBuilder;

/**
 * Ordered approach.
 */
$user = UserBuilder::create()
    ->withName('Matteo')
    ->withEmail('m.galacci@gmail.com')
    ->withAge(38)
    ->build();

dump($user);

/**
 * Default values approach.
 */
$user = UserBuilder::createDefault()
    ->build();

dump($user);
