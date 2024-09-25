<?php

declare(strict_types=1);

namespace Barryvdh\LaravelIdeHelper\Tests\Console\ModelsCommand\AdvancedCasts\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AdvancedCast extends Model
{
    protected $casts = [
        'cast_to_date_serialization' => 'date:Y-m-d',
        'cast_to_datetime_serialization' => 'datetime:Y-m-d H:i:s',
        'cast_to_custom_datetime' => 'custom_datetime:Y-m-d H:i:s',
        'cast_to_immutable_date' => 'immutable_date',
        'cast_to_immutable_custom_datetime' => 'immutable_custom_datetime:Y-m-d H:i:s',
        'cast_to_immutable_datetime' => 'immutable_datetime',
        'cast_to_timestamp' => 'timestamp',
        'cast_to_encrypted' => 'encrypted',
        'cast_to_encrypted_array' => 'encrypted:array',
        'cast_to_encrypted_collection' => 'encrypted:collection',
        'cast_to_encrypted_json' => 'encrypted:json',
        'cast_to_encrypted_object' => 'encrypted:object',
        'cast_to_as_collection' => AsCollection::class,
        'cast_to_as_collection_with_params' => AsCollection::class . ':' . ExampleCollection::class,
        'cast_to_as_enum_collection' => AsEnumCollection::class,
        'cast_to_as_enum_collection_with_params' => AsEnumCollection::class . ':' . ExampleEnum::class,
        'cast_to_as_array_object' => AsArrayObject::class,
    ];
}

class ExampleCollection extends Collection
{
}
enum ExampleEnum: string
{
}
