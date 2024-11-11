<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

final readonly class User
{
    public function __construct(
        public string $name,
        public string $email,
        public int $age,
    ) {}
}
