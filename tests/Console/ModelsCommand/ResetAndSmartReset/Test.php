<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ResetAndSmartReset;

use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;

class Test extends AbstractModelsCommand
{
    public function testNoReset(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }

    public function testReset(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
            '--reset' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }
}
