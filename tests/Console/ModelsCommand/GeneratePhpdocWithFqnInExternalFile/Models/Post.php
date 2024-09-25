<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Models;

use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder;

class Post extends Model
{
    public function newEloquentBuilder($query): EMaterialQueryBuilder
    {
        return new EMaterialQueryBuilder($query);
    }
}
