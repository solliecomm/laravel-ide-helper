<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Collection;

class CustomCasterWithCollectionGenerics implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes): Collection
    {
        return new Collection();
    }
    
    public function set($model, string $key, $value, array $attributes)
    {
        // TODO: Implement set() method.
    }
}
