<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests;

use Illuminate\Database\Eloquent\Builder;
use PHPUnit\Framework\TestCase;
use Sollie\LaravelIdeHelper\Method;

class MethodTest extends TestCase
{
    /**
     * Test that we can actually instantiate the class
     */
    public function testCanInstantiate()
    {
        $reflectionClass = new \ReflectionClass(ExampleClass::class);
        $reflectionMethod = $reflectionClass->getMethod('setName');

        $method = new Method($reflectionMethod, 'Example', $reflectionClass);

        $this->assertInstanceOf(Method::class, $method);
    }

    /**
     * Test the output of a class
     */
    public function testOutput()
    {
        $reflectionClass = new \ReflectionClass(ExampleClass::class);
        $reflectionMethod = $reflectionClass->getMethod('setName');

        $method = new Method($reflectionMethod, 'Example', $reflectionClass);

        $output = <<<'DOC'
/**
 * 
 *
 * @param string $last
 * @param string $first
 * @param string $middle
 * @static 
 */
DOC;
        $this->assertStringEqualsStringIgnoringLineEndings($output, $method->getDocComment(''));
        $this->assertSame('setName', $method->getName());
        $this->assertSame('\\' . ExampleClass::class, $method->getDeclaringClass());
        $this->assertSame('$last, $first, ...$middle', $method->getParams(true));
        $this->assertSame(['$last', '$first', '...$middle'], $method->getParams(false));
        $this->assertSame('$last, $first = \'Barry\', ...$middle', $method->getParamsWithDefault(true));
        $this->assertSame(['$last', '$first = \'Barry\'', '...$middle'], $method->getParamsWithDefault(false));
        $this->assertTrue($method->shouldReturn());
    }

    /**
     * Test the output of a class
     */
    public function testEloquentBuilderOutput()
    {
        $reflectionClass = new \ReflectionClass(Builder::class);
        $reflectionMethod = $reflectionClass->getMethod('with');

        $method = new Method($reflectionMethod, 'Builder', $reflectionClass);

        $output =  <<<'DOC'
/**
 * Set the relationships that should be eager loaded.
 *
 * @param \Illuminate\Database\Eloquent\array<array-key, array|(\Closure(\Illuminate\Database\Eloquent\Relations\Relation<*,*,*>):  mixed)|string>|string  $relations
 * @param \Illuminate\Database\Eloquent\(\Closure(\Illuminate\Database\Eloquent\Relations\Relation<*,*,*>):  mixed)|string|null  $callback
 * @return \Illuminate\Database\Eloquent\Builder|static 
 * @static 
 */
DOC;
        $this->assertStringEqualsStringIgnoringLineEndings($output, $method->getDocComment(''));
        $this->assertSame('with', $method->getName());
        $this->assertSame('\\' . Builder::class, $method->getDeclaringClass());
        $this->assertSame('$relations, $callback', $method->getParams(true));
        $this->assertSame(['$relations', '$callback'], $method->getParams(false));
        $this->assertSame('$relations, $callback = null', $method->getParamsWithDefault(true));
        $this->assertSame(['$relations', '$callback = null'], $method->getParamsWithDefault(false));
        $this->assertTrue($method->shouldReturn());
    }

    /**
     * Test special characters in methods default values
     */
    public function testDefaultSpecialChars()
    {
        $reflectionClass = new \ReflectionClass(ExampleClass::class);
        $reflectionMethod = $reflectionClass->getMethod('setSpecialChars');

        $method = new Method($reflectionMethod, 'Example', $reflectionClass);
        $this->assertSame('$chars', $method->getParams(true));
        $this->assertSame(['$chars'], $method->getParams(false));
        $this->assertSame('$chars = \'$\\\'\\\\\'', $method->getParamsWithDefault(true));
        $this->assertSame(['$chars = \'$\\\'\\\\\''], $method->getParamsWithDefault(false));
    }

    /**
     * Test the output of a class when using class aliases for it
     */
    public function testClassAliases()
    {
        $reflectionClass = new \ReflectionClass(ExampleClass::class);
        $reflectionMethod = $reflectionClass->getMethod('getApplication');

        $method = new Method($reflectionMethod, 'Example', $reflectionClass, null, [], [
            'Application' => '\\Illuminate\\Foundation\\Application',
        ]);

        $output = <<<'DOC'
/**
 * 
 *
 * @return \Illuminate\Foundation\Application 
 * @static 
 */
DOC;

        $this->assertStringContainsStringIgnoringLineEndings($output, $method->getDocComment(''));
        $this->assertSame('getApplication', $method->getName());
        $this->assertSame('\\' . ExampleClass::class, $method->getDeclaringClass());
        $this->assertSame('', $method->getParams(true));
        $this->assertSame([], $method->getParams(false));
        $this->assertSame('', $method->getParamsWithDefault(true));
        $this->assertSame([], $method->getParamsWithDefault(false));
        $this->assertTrue($method->shouldReturn());
    }
}

class ExampleClass
{
    /**
     * @param string $last
     * @param string $first
     * @param string $middle
     */
    public function setName($last, $first = 'Barry', ...$middle)
    {
        return;
    }

    public function setSpecialChars($chars = "\$'\\")
    {
        return;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return;
    }
}
