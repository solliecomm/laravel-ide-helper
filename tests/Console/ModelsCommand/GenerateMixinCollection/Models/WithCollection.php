<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GenerateMixinCollection\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Collection as IntCollection;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GenerateMixinCollection\NonModels\CollectionModel;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GenerateMixinCollection\NonModels\NonModel;

class WithCollection extends Model
{
    /**
     * @return Collection<int, string>
     */
    public function getCollectionAttribute(): Collection
    {
        return new Collection();
    }

    /**
     * @return Collection
     */
    public function getCollectionWithoutTemplateAttribute(): Collection
    {
        return new Collection();
    }

    public function getCollectionWithoutDocBlockAttribute(): Collection
    {
        return new Collection();
    }

    /**
     * @return Collection<int, NonModel>
     */
    public function getCollectionWithNonModelTemplateAttribute(): Collection
    {
        return new Collection();
    }

    /**
     * @return Collection<Collection, CollectionModel<IntCollection, CollectionModel<int, NonModel>>>
     */
    public function getCollectionWithNestedTemplateAttribute(): Collection
    {
        return new Collection();
    }
}
