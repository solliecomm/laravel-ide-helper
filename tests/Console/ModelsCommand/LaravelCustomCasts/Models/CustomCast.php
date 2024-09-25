<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastableReturnsAnonymousCaster;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastableReturnsCustomCaster;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastableWithoutReturnType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithCollectionGenerics;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithDocblockReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithDocblockReturnFqn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithNullableCollectionGenerics;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithNullablePrimitiveReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithoutReturnType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithParam;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithPrimitiveDocblockReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithPrimitiveReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithReturnType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithStaticReturnType;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\ExtendedSelfCastingCasterWithStaticDocblockReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\ExtendedSelfCastingCasterWithThisDocblockReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\InboundAttributeCaster;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\SelfCastingCasterWithStaticDocblockReturn;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\SelfCastingCasterWithThisDocblockReturn;

class CustomCast extends Model
{
    protected $casts = [
        'casted_property_with_return_type' => CustomCasterWithReturnType::class,
        'casted_property_with_static_return_type' => CustomCasterWithStaticReturnType::class,
        'casted_property_with_return_docblock' => CustomCasterWithDocblockReturn::class,
        'casted_property_with_return_docblock_fqn' => CustomCasterWithDocblockReturnFqn::class,
        'casted_property_with_return_primitive' => CustomCasterWithPrimitiveReturn::class,
        'casted_property_with_return_primitive_docblock' => CustomCasterWithPrimitiveDocblockReturn::class,
        'casted_property_with_return_nullable_primitive' => CustomCasterWithNullablePrimitiveReturn::class,
        'casted_property_with_return_nullable_primitive_and_nullable_column' => CustomCasterWithNullablePrimitiveReturn::class,
        'casted_property_without_return' => CustomCasterWithoutReturnType::class,
        'casted_property_with_param' => CustomCasterWithParam::class . ':param',
        'casted_property_with_static_return_docblock' => SelfCastingCasterWithStaticDocblockReturn::class,
        'casted_property_with_this_return_docblock' => SelfCastingCasterWithThisDocblockReturn::class,
        'casted_property_with_castable' => CastableReturnsCustomCaster::class,
        'casted_property_with_anonymous_cast' => CastableReturnsAnonymousCaster::class,
        'casted_property_without_return_type' => CastableWithoutReturnType::class,
        'extended_casted_property_with_static_return_docblock' => ExtendedSelfCastingCasterWithStaticDocblockReturn::class,
        'extended_casted_property_with_this_return_docblock' => ExtendedSelfCastingCasterWithThisDocblockReturn::class,
        'casted_property_with_static_return_docblock_and_param' => SelfCastingCasterWithStaticDocblockReturn::class . ':param',
        'cast_without_property' => CustomCasterWithReturnType::class,
        'cast_inbound_attribute' => InboundAttributeCaster::class,
        'casted_property_with_collection_generics' => CustomCasterWithCollectionGenerics::class . ':' . ExampleCollection::class,
        'casted_property_with_nullable_collection_generics' => CustomCasterWithNullableCollectionGenerics::class . ':' . ExampleCollection::class,
    ];
}

class ExampleCollection extends Collection
{
}
