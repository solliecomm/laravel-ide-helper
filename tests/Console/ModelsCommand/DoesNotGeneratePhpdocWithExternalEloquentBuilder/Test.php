<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\DoesNotGeneratePhpdocWithExternalEloquentBuilder;

use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;

class Test extends AbstractModelsCommand
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('ide-helper.write_model_external_builder_methods', false);
    }

    public function test(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--nowrite' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Model information was written to _ide_helper_models.php', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }
}
