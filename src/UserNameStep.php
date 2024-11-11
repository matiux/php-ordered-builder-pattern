<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

interface UserNameStep
{
    public function withName(string $name): UserEmailStep;
}
