<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations;

use Illuminate\Support\Facades\Config;
use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\AbstractModelsCommand;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToAnyMorphedRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToAnyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToBadlyNamedNotManyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToManyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToOneRelationType;

class Test extends AbstractModelsCommand
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('ide-helper.additional_relation_types', [
            'testToOneRelation' => SampleToOneRelationType::class,
            'testToManyRelation' => SampleToManyRelationType::class,
            'testToAnyRelation' => SampleToAnyRelationType::class,
            'testToAnyMorphedRelation' => SampleToAnyMorphedRelationType::class,
            'testToBadlyNamedNotManyRelation' => SampleToBadlyNamedNotManyRelationType::class,
        ]);

        Config::set('ide-helper.additional_relation_return_types', [
            'testToAnyRelation' => 'many',
            'testToAnyMorphedRelation' => 'morphTo',
            'testToBadlyNamedNotManyRelation' => 'one',
        ]);
    }

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
