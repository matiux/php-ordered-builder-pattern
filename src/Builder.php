<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

/**
 * @template T of object
 */
interface Builder
{
    /**
     * @return T
     */
    public function build();
}
