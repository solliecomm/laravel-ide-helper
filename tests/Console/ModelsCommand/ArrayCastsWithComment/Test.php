<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ArrayCastsWithComment;

use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;

class Test extends AbstractModelsCommand
{
    /**
     * The generated snapshot is wrong until
     * https://github.com/barryvdh/laravel-ide-helper/issues/1505 is fixed
     */
    public function test(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }
}
