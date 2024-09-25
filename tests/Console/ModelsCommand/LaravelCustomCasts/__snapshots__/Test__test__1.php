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

/**
 * 
 *
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_return_type
 * @property CustomCasterWithStaticReturnType $casted_property_with_static_return_type
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_return_docblock
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_return_docblock_fqn
 * @property array $casted_property_with_return_primitive
 * @property array $casted_property_with_return_primitive_docblock
 * @property array|null $casted_property_with_return_nullable_primitive
 * @property array|null $casted_property_with_return_nullable_primitive_and_nullable_column
 * @property $casted_property_without_return
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_param
 * @property SelfCastingCasterWithStaticDocblockReturn $casted_property_with_static_return_docblock
 * @property SelfCastingCasterWithThisDocblockReturn $casted_property_with_this_return_docblock
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_castable
 * @property \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CastedProperty $casted_property_with_anonymous_cast
 * @property CastableWithoutReturnType $casted_property_without_return_type
 * @property ExtendedSelfCastingCasterWithStaticDocblockReturn $extended_casted_property_with_static_return_docblock
 * @property ExtendedSelfCastingCasterWithThisDocblockReturn $extended_casted_property_with_this_return_docblock
 * @property SelfCastingCasterWithStaticDocblockReturn $casted_property_with_static_return_docblock_and_param
 * @property Collection<int, \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Models\ExampleCollection> $casted_property_with_collection_generics
 * @property Collection<int, \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\LaravelCustomCasts\Models\ExampleCollection>|null $casted_property_with_nullable_collection_generics
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithAnonymousCast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithCastable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithCollectionGenerics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithNullableCollectionGenerics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithParam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnDocblock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnDocblockFqn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnNullablePrimitive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnNullablePrimitiveAndNullableColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnPrimitive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnPrimitiveDocblock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithReturnType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithStaticReturnDocblock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithStaticReturnDocblockAndParam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithStaticReturnType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithThisReturnDocblock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithoutReturn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereCastedPropertyWithoutReturnType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereExtendedCastedPropertyWithStaticReturnDocblock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomCast whereExtendedCastedPropertyWithThisReturnDocblock($value)
 * @mixin \Eloquent
 */
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
