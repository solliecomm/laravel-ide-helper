<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\QueryScopes\Models;

use Illuminate\Database\Eloquent\Model;

class PostParent extends Model
{
    public function scopeActive($query)
    {
        return $query;
    }
}
