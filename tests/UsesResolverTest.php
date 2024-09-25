<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests;

use PHPUnit\Framework\TestCase;
use Sollie\LaravelIdeHelper\UsesResolver;

class UsesResolverTest extends TestCase
{
    /**
     * Test that we can correctly load uses from supplied code
     */
    public function testLoadFromCode()
    {
        $usesResolver = new UsesResolver();

        $code = <<<'DOC'
<?php
namespace Sollie\LaravelIdeHelper\Tests;

use Sollie\LaravelIdeHelper\UsesResolver as MyUsesResolver;
use PHPUnit\Framework\TestCase;

class UsesResolverTest extends TestCase
{
    //
}
DOC;

        $this->assertEquals(
            $usesResolver->loadFromCode('Sollie\\LaravelIdeHelper\\Tests\\UsesResolverTest', $code),
            [
                'MyUsesResolver' => '\\Sollie\\LaravelIdeHelper\\UsesResolver',
                'TestCase' => '\\PHPUnit\Framework\TestCase',
            ]
        );
    }

    /**
     * Test that we can correctly load uses from a class
     */
    public function testLoadFromClass()
    {
        $usesResolver = new UsesResolver();

        $this->assertEquals(
            $usesResolver->loadFromClass(self::class),
            [
                'UsesResolver' => '\\Sollie\\LaravelIdeHelper\\UsesResolver',
                'TestCase' => '\\PHPUnit\Framework\TestCase',
            ]
        );
    }
}
