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


namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Models{
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
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post isActive()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post isLoadingWith(?string $with)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post isStatus(string $status)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post newModelQuery()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post newQuery()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post query()
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBigIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBigIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBinaryNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBinaryNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBooleanNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereBooleanNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereCharNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereCharNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereCreatedAt($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDateNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDateNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDatetimeNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDatetimeNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDatetimetzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDatetimetzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDecimalNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDecimalNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDoubleNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereDoubleNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereEnumNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereEnumNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereFloatNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereFloatNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereId($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereIpaddressNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereIpaddressNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereJsonNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereJsonNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereJsonbNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereJsonbNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereLongTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereLongTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMacaddressNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMacaddressNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMediumIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMediumIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMediumTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereMediumTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereSmallIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereSmallIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereStringNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereStringNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTextNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTextNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimeNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimeNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimestampNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimestampNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimestamptzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimestamptzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimetzNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTimetzNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTinyIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereTinyIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedBigIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedBigIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedMediumIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedMediumIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedSmallIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedSmallIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedTinyIntegerNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUnsignedTinyIntegerNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUpdatedAt($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUuidNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereUuidNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereYearNotNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post whereYearNullable($value)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withBool(?bool $booleanVar)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withBoolDifferently(?bool $booleanVar)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withBoolTypeHinted(bool $booleanVar)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withMixedOption($option)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withNullAndAssignmentTestCommand(?\Sollie\LaravelIdeHelper\Console\ModelsCommand $testCommand = null)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withNullTestCommand(?\Sollie\LaravelIdeHelper\Console\ModelsCommand $testCommand)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withNullTestCommandInDocBlock($testCommand)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withSomeone($someone)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withTestCommand(\Sollie\LaravelIdeHelper\Console\ModelsCommand $testCommand)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withTheNumber(?int $number)
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithExternalEloquentBuilder\Builders\PostExternalQueryBuilder|Post withTheNumberDifferently(?int $number)
 */
	class Post extends \Eloquent {}
}

