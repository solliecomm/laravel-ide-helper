<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $char_nullable
 * @property string $char_not_nullable
 * @property string|null $string_nullable
 * @property string $string_not_nullable
 * @property string|null $text_nullable
 * @property string $text_not_nullable
 * @property string|null $medium_text_nullable
 * @property string $medium_text_not_nullable
 * @property string|null $long_text_nullable
 * @property string $long_text_not_nullable
 * @property int|null $integer_nullable
 * @property int $integer_not_nullable
 * @property int|null $tiny_integer_nullable
 * @property int $tiny_integer_not_nullable
 * @property int|null $small_integer_nullable
 * @property int $small_integer_not_nullable
 * @property int|null $medium_integer_nullable
 * @property int $medium_integer_not_nullable
 * @property int|null $big_integer_nullable
 * @property int $big_integer_not_nullable
 * @property int|null $unsigned_integer_nullable
 * @property int $unsigned_integer_not_nullable
 * @property int|null $unsigned_tiny_integer_nullable
 * @property int $unsigned_tiny_integer_not_nullable
 * @property int|null $unsigned_small_integer_nullable
 * @property int $unsigned_small_integer_not_nullable
 * @property int|null $unsigned_medium_integer_nullable
 * @property int $unsigned_medium_integer_not_nullable
 * @property int|null $unsigned_big_integer_nullable
 * @property int $unsigned_big_integer_not_nullable
 * @property float|null $float_nullable
 * @property float $float_not_nullable
 * @property float|null $double_nullable
 * @property float $double_not_nullable
 * @property string|null $decimal_nullable
 * @property string $decimal_not_nullable
 * @property int|null $boolean_nullable
 * @property int $boolean_not_nullable
 * @property string|null $enum_nullable
 * @property string $enum_not_nullable
 * @property string|null $json_nullable
 * @property string $json_not_nullable
 * @property string|null $jsonb_nullable
 * @property string $jsonb_not_nullable
 * @property string|null $date_nullable
 * @property string $date_not_nullable
 * @property string|null $datetime_nullable
 * @property string $datetime_not_nullable
 * @property string|null $datetimetz_nullable
 * @property string $datetimetz_not_nullable
 * @property string|null $time_nullable
 * @property string $time_not_nullable
 * @property string|null $timetz_nullable
 * @property string $timetz_not_nullable
 * @property string|null $timestamp_nullable
 * @property string $timestamp_not_nullable
 * @property string|null $timestamptz_nullable
 * @property string $timestamptz_not_nullable
 * @property int|null $year_nullable
 * @property int $year_not_nullable
 * @property string|null $binary_nullable
 * @property string $binary_not_nullable
 * @property string|null $uuid_nullable
 * @property string $uuid_not_nullable
 * @property string|null $ipaddress_nullable
 * @property string $ipaddress_not_nullable
 * @property string|null $macaddress_nullable
 * @property string $macaddress_not_nullable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post newModelQuery()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post newQuery()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post query()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBigIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBigIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBinaryNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBinaryNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBooleanNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereBooleanNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereCharNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereCharNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereCreatedAt($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDateNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDateNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDatetimeNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDatetimeNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDatetimetzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDatetimetzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDecimalNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDecimalNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDoubleNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereDoubleNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereEnumNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereEnumNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereFloatNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereFloatNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereId($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereIpaddressNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereIpaddressNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereJsonNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereJsonNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereJsonbNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereJsonbNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereLongTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereLongTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMacaddressNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMacaddressNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMediumIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMediumIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMediumTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereMediumTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereSmallIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereSmallIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereStringNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereStringNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimeNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimeNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimestampNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimestampNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimestamptzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimestamptzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimetzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTimetzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTinyIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereTinyIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedBigIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedBigIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedMediumIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedMediumIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedSmallIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedSmallIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedTinyIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUnsignedTinyIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUpdatedAt($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUuidNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereUuidNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereYearNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithFqnInExternalFile\Builders\EMaterialQueryBuilder|Post whereYearNullable($value)
 */
	class Post extends \Eloquent {}
}

