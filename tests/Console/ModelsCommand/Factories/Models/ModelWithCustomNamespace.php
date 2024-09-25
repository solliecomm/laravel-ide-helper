<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\CustomSpace\ModelWithCustomNamespaceFactory;

class ModelWithCustomNamespace extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ModelWithCustomNamespaceFactory::new();
    }
}
