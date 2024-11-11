<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

interface UserAgeStep
{
    public function withAge(int $age): UserBuilder;
}
