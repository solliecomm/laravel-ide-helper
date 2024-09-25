<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests;

use PHPUnit\Framework\Assert;
use Spatie\Snapshots\Driver;

class SnapshotPhpDriver implements Driver
{
    public function serialize($data): string
    {
        return (string) $data;
    }

    public function extension(): string
    {
        return 'php';
    }

    public function match($expected, $actual)
    {
        Assert::assertStringEqualsStringIgnoringLineEndings($expected, $this->serialize($actual));
    }
}
