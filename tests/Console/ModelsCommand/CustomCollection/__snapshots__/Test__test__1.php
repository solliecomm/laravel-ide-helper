<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\CustomCollection\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\CustomCollection\Collections\SimpleCollection;

/**
 * 
 *
 * @property int $id
 * @property-read SimpleCollection<int, Simple> $relationHasMany
 * @property-read int|null $relation_has_many_count
 * @method static SimpleCollection<int, static> all($columns = ['*'])
 * @method static SimpleCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> query()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> whereId($value)
 * @mixin \Eloquent
 */
class Simple extends Model
{
    public function newCollection(array $models = [])
    {
        return new SimpleCollection($models);
    }

    public function relationHasMany(): HasMany
    {
        return $this->hasMany(Simple::class);
    }
}
