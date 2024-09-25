<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Factories;

use PHPUnit\Framework\TestCase;
use Sollie\LaravelIdeHelper\Factories;

class AllTest extends TestCase
{
    public function testAll(): void
    {
        $factories = Factories::all();

        self::assertEmpty($factories);
    }
}
