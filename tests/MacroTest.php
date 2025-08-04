<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests;

use const PHP_EOL;

use Barryvdh\Reflection\DocBlock;
use Barryvdh\Reflection\DocBlock\Tag;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Routing\UrlGenerator;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionFunctionAbstract;
use Sollie\LaravelIdeHelper\Macro;

use function array_map;
use function implode;

/**
 * @internal
 *
 * @coversDefaultClass \Sollie\LaravelIdeHelper\Macro
 */
class MacroTest extends TestCase
{
    /**
     * @covers ::initPhpDoc
     *
     * @throws ReflectionException
     */
    public function test_init_php_doc_eloquent_builder_has_static_in_return_type(): void
    {
        $class = new ReflectionClass(EloquentBuilder::class);
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                function (): EloquentBuilder {
                    return $this;
                }
            ),
            $class
        );

        $this->assertEquals(
            '@return \Illuminate\Database\Eloquent\Builder|static',
            $this->tagsToString($phpdoc, 'return')
        );
    }

    /**
     * @covers ::initPhpDoc
     *
     * @throws ReflectionException
     */
    public function test_init_php_doc_closure_without_doc_block(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                function (?int $a = null): int {
                    return 0;
                }
            )
        );

        $this->assertEmpty($phpdoc->getText());
        $this->assertEquals('@param int|null $a', $this->tagsToString($phpdoc, 'param'));
        $this->assertEquals('@return int', $this->tagsToString($phpdoc, 'return'));
        $this->assertTrue($phpdoc->hasTag('see'));
    }

    /**
     * @covers ::initPhpDoc
     *
     * @throws ReflectionException
     */
    public function test_init_php_doc_closure_with_args_and_return_type(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                /**
                 * Test docblock.
                 */
                function (?int $a = null): int {
                    return 0;
                }
            )
        );

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertEquals('@param int|null $a', $this->tagsToString($phpdoc, 'param'));
        $this->assertEquals('@return int', $this->tagsToString($phpdoc, 'return'));
        $this->assertTrue($phpdoc->hasTag('see'));
    }

    /**
     * @covers ::initPhpDoc
     *
     * @throws ReflectionException
     */
    public function test_init_php_doc_closure_with_args(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                /**
                 * Test docblock.
                 */
                function (?int $a = null) {
                    return 0;
                }
            )
        );

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertEquals('@param int|null $a', $this->tagsToString($phpdoc, 'param'));
        $this->assertFalse($phpdoc->hasTag('return'));
        $this->assertTrue($phpdoc->hasTag('see'));
    }

    /**
     * @covers ::initPhpDoc
     *
     * @throws ReflectionException
     */
    public function test_init_php_doc_closure_with_return_type(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                /**
                 * Test docblock.
                 */
                function (): int {
                    return 0;
                }
            )
        );

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertFalse($phpdoc->hasTag('param'));
        $this->assertEquals('@return int', $this->tagsToString($phpdoc, 'return'));
        $this->assertTrue($phpdoc->hasTag('see'));
    }

    /**
     * @covers ::initPhpDoc
     */
    public function test_init_php_doc_params_added_only_not_present(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                /**
                 * Test docblock.
                 *
                 * @param  \stdClass|null  $a  aaaaa
                 */
                function ($a = null): int {
                    return 0;
                }
            )
        );

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertEquals('@param \stdClass|null $a aaaaa', $this->tagsToString($phpdoc, 'param'));
        $this->assertEquals('@return int', $this->tagsToString($phpdoc, 'return'));
    }

    /**
     * @covers ::initPhpDoc
     */
    public function test_init_php_doc_return_added_only_not_present(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(
            new ReflectionFunction(
                /**
                 * Test docblock.
                 *
                 * @return \stdClass|null rrrrrrr
                 */
                function ($a = null): int {
                    return 0;
                }
            )
        );

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertEquals('@param mixed $a', $this->tagsToString($phpdoc, 'param'));
        $this->assertEquals('@return \stdClass|null rrrrrrr', $this->tagsToString($phpdoc, 'return'));
    }

    public function test_init_php_doc_params_with_union_types(): void
    {
        $phpdoc = (new MacroMock())->getPhpDoc(eval(<<<'PHP'
            return new ReflectionFunction(
                /**
                 * Test docblock.
                 */
                function (\Stringable|string $a = null): \Stringable|string|null {
                    return $a;
                }
            );
        PHP));

        $this->assertStringContainsString('Test docblock', $phpdoc->getText());
        $this->assertEquals('@param \Stringable|string|null $a', $this->tagsToString($phpdoc, 'param'));
        $this->assertEquals('@return \Stringable|string|null', $this->tagsToString($phpdoc, 'return'));
    }

    protected function tagsToString(DocBlock $docBlock, string $name): string
    {
        $tags = $docBlock->getTagsByName($name);
        $tags = array_map(
            function (Tag $tag) {
                return trim((string) $tag);
            },
            $tags
        );

        return implode(PHP_EOL, $tags);
    }

    /**
     * Test that we can actually instantiate the class
     */
    public function test_can_instantiate(): void
    {
        $reflectionMethod = new \ReflectionMethod(UrlGeneratorMacroClass::class, '__invoke');

        $this->assertDoesntThrow(
            fn () => new Macro($reflectionMethod, UrlGenerator::class, new ReflectionClass(UrlGenerator::class))
        );
    }

    /**
     * Test the output of a class
     */
    public function test_output(): void
    {
        $reflectionMethod = new \ReflectionMethod(UrlGeneratorMacroClass::class, '__invoke');

        $macro = new Macro($reflectionMethod, 'URL', new ReflectionClass(UrlGenerator::class));
        $output = <<<'DOC'
/**
 * @see \Sollie\LaravelIdeHelper\Tests\UrlGeneratorMacroClass::__invoke()
 * @param string $foo
 * @param int $bar
 * @return string
 * @static
 */
DOC;
        $this->assertStringEqualsStringIgnoringLineEndings($output, $macro->getDocComment(''));
        $this->assertSame('__invoke', $macro->getRealName());
        $this->assertSame('\\'.UrlGenerator::class, $macro->getDeclaringClass());
        $this->assertSame('$foo, $bar', $macro->getParams(true));
        $this->assertSame(['$foo', '$bar'], $macro->getParams(false));
        $this->assertSame('$foo, $bar = 0', $macro->getParamsWithDefault(true));
        $this->assertSame(['$foo', '$bar = 0'], $macro->getParamsWithDefault(false));
        $this->assertTrue($macro->shouldReturn());
        $this->assertSame('$instance->__invoke($foo, $bar)', $macro->getRootMethodCall());
    }
}

/**
 * @internal
 *
 * @noinspection PhpMultipleClassesDeclarationsInOneFile
 */
class MacroMock extends Macro
{
    public function __construct()
    {
        // no need to call parent
    }

    public function getPhpDoc(ReflectionFunctionAbstract $method, ?ReflectionClass $class = null): DocBlock
    {
        return (new Macro($method, '', $class ?? $method->getClosureScopeClass()))->phpdoc;
    }
}

/**
 * Example of an invokable class to be used as a macro.
 */
class UrlGeneratorMacroClass
{
    public function __invoke(string $foo, int $bar = 0): string
    {
        return '';
    }
}
