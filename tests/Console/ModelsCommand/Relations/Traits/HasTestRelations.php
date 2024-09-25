<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Traits;

use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToAnyMorphedRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToAnyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToBadlyNamedNotManyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToManyRelationType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Types\SampleToOneRelationType;

trait HasTestRelations
{
    public function testToOneRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToOneRelationType($instance->newQuery(), $this);
    }

    public function testToManyRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToManyRelationType($instance->newQuery(), $this);
    }

    public function testToAnyRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToAnyRelationType($instance->newQuery(), $this);
    }

    public function testToAnyMorphedRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToAnyMorphedRelationType($instance->newQuery(), $this);
    }

    public function testToBadlyNamedNotManyRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToBadlyNamedNotManyRelationType($instance->newQuery(), $this);
    }
}
