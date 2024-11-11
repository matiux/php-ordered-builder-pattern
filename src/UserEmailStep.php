<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

interface UserEmailStep
{
    public function withEmail(string $email): UserAgeStep;
}
