<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class CustomCasterWithPrimitiveDocblockReturn implements CastsAttributes
{
    /**
     * @inheritDoc
     * @return array
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return new CastedProperty();
    }

    /**
     * @inheritDoc
     */
    public function set($model, string $key, $value, array $attributes)
    {
        // TODO: Implement set() method.
    }
}
