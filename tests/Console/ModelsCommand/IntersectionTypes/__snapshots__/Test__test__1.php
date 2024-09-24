<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\IntersectionTypes\Models;

use Countable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Iterator;

/**
 * 
 *
 * @property-read (\Iterator&\Countable) $foo
 * @method static \Illuminate\Database\Eloquent\Builder|IntersectionTypeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IntersectionTypeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IntersectionTypeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|IntersectionTypeModel withIntersectionTypeParameter((\Iterator&\Countable) $bar)
 * @method static \Illuminate\Database\Eloquent\Builder|IntersectionTypeModel withNullableIntersectionTypeParameter(?(\Iterator&\Countable) $bar)
 * @mixin \Eloquent
 */
class IntersectionTypeModel extends Model
{
    public function scopeWithIntersectionTypeParameter(Builder $query, Iterator&Countable $bar): Builder
    {
        return $query->where('foo', $bar);
    }

    public function scopeWithNullableIntersectionTypeParameter(Builder $query, (Iterator&Countable)|null $bar): Builder
    {
        return $query->where('foo', $bar);
    }

    public function getFooAttribute(): Iterator&Countable
    {
        return new class() implements Iterator, Countable {
            public function current(): mixed { return null; }

            public function next(): void {}

            public function key(): mixed { return 0; }

            public function valid(): bool { return true; }

            public function rewind(): void {}

            public function count(): int { return 1; }
        };
    }
}
