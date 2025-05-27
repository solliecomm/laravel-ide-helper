<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\QueryScopes\Models;

class Post extends PostParent
{
    public function scopePublic($query)
    {
        return $query;
    }

    public function scopePublicArg($query, $arg)
    {
        return $query;
    }

    public function scopePublicTypedArg($query, int $arg)
    {
        return $query;
    }

    public function scopePublicTypedNullableArg($query, ?int $arg)
    {
        return $query;
    }

    public function scopePublicTypedArrayArg($query, array $arg)
    {
        return $query;
    }

    /**
     * @param  array<int>  $arg
     */
    public function scopePublicTypedArrayGenericsArg($query, array $arg)
    {
        return $query;
    }
}
