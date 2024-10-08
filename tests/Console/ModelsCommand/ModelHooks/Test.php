<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks;

use Illuminate\Filesystem\Filesystem;
use Mockery;
use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks\CustomMethod;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks\CustomProperty;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks\CustomTags;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks\UnsetMethod;

class Test extends AbstractModelsCommand
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('ide-helper', [
            'model_locations' => [
                // This is calculated from the base_path() which points to
                // vendor/orchestra/testbench-core/laravel
                '/../../../../tests/Console/ModelsCommand/ModelHooks/Models',
            ],
            'model_hooks' => [
                CustomProperty::class,
                CustomMethod::class,
                CustomTags::class,
                UnsetMethod::class,
            ],
        ]);
    }

    public function test(): void
    {
        $actualContent = null;

        $mockFilesystem = Mockery::mock(Filesystem::class);
        $mockFilesystem
            ->shouldReceive('get')
            ->andReturn(file_get_contents(__DIR__ . '/Models/Simple.php'))
            ->once();
        $mockFilesystem
            ->shouldReceive('put')
            ->with(
                Mockery::any(),
                Mockery::capture($actualContent)
            )
            ->andReturn(1) // Simulate we wrote _something_ to the file
            ->once();

        $this->instance(Filesystem::class, $mockFilesystem);

        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());

        $expectedContent = <<<'PHP'
<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property-read string $custom
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> custom($custom)
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> query()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> whereId($value)
 * @mixin \Eloquent
 * @phpstorm-ignore argument.type
 */
class Simple extends Model
{
}

PHP;

        $this->assertStringEqualsStringIgnoringLineEndings($expectedContent, $actualContent);
    }
}
