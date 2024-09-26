<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Attributes\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $name_read
 * @property string|null $name_write
 * @property-read string|null $non_backed_get
 * @property-write string|null $non_backed_set
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> query()
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> whereNameRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<BackedAttribute> whereNameWrite($value)
 * @mixin \Eloquent
 */
class BackedAttribute extends Model
{
    protected function name(): Attribute
    {
        return new Attribute(
            function (?string $name): ?string {
                return $name;
            },
            function (?string $name): ?string {
                return $name;
            }
        );
    }

    protected function nameRead(): Attribute
    {
        return new Attribute(
            function (?string $name): ?string {
                return $name;
            },
        );
    }

    protected function nameWrite(): Attribute
    {
        return new Attribute(
            set: function (?string $name): ?string {
                return $name;
            },
        );
    }

    protected function nonBackedSet(): Attribute
    {
        return new Attribute(
            set: function (?string $name): ?string {
                return $name;
            },
        );
    }

    protected function nonBackedGet(): Attribute
    {
        return new Attribute(
            get: function (): ?string {
                return 'test';
            },
        );
    }
}
<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Attributes\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property-read array<int, self>|null $array_generics_in_docblock
 * @property-read Carbon|null $classes_as_return_type
 * @property int $diverging_type_hinted_get_and_set
 * @property string|null $name
 * @property-read mixed $non_type_hinted_get
 * @property mixed $non_type_hinted_get_and_set
 * @property-write mixed $non_type_hinted_set
 * @property-write mixed $parameterless_set
 * @property-read string|null $type_hinted_get
 * @property string|null $type_hinted_get_and_set
 * @property-write string|null $type_hinted_set
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> query()
 * @method static \Illuminate\Database\Eloquent\Builder<Simple> whereId($value)
 * @mixin \Eloquent
 */
class Simple extends Model
{
    // With a backed property
    protected function name(): Attribute
    {
        return new Attribute(
            function (?string $name): ?string {
                return $name;
            },
            function (?string $name): ?string {
                return $name;
            }
        );
    }

    // Without backed properties

    protected function typeHintedGetAndSet(): Attribute
    {
        return new Attribute(
            function (): ?string {
                return $this->name;
            },
            function (?string $name) {
                $this->name = $name;
            }
        );
    }

    protected function divergingTypeHintedGetAndSet(): Attribute
    {
        return new Attribute(
            function (): int {
                return strlen($this->name);
            },
            function (?string $name) {
                $this->name = $name;
            }
        );
    }

    protected function typeHintedGet(): Attribute
    {
        return Attribute::get(function (): ?string {
            return $this->name;
        });
    }

    protected function typeHintedSet(): Attribute
    {
        return Attribute::set(function (?string $name) {
            $this->name = $name;
        });
    }

    protected function nonTypeHintedGetAndSet(): Attribute
    {
        return new Attribute(
            function () {
                return $this->name;
            },
            function ($name) {
                $this->name = $name;
            }
        );
    }

    protected function nonTypeHintedGet(): Attribute
    {
        return Attribute::get(function () {
            return $this->name;
        });
    }

    protected function nonTypeHintedSet(): Attribute
    {
        return Attribute::set(function ($name) {
            $this->name = $name;
        });
    }

    protected function parameterlessSet(): Attribute
    {
        return Attribute::set(function () {
            $this->name = null;
        });
    }

    protected function classesAsReturnType(): Attribute
    {
        return new Attribute(
            function (?string $name): ?Carbon {
                return Carbon::now();
            },
        );
    }

    protected function arrayGenericsInDocblock(): Attribute
    {
        return new Attribute(
            /** @return array<int, self>|null */
            function (?string $name): ?array {
                return [$this];
            },
        );
    }

    /**
     * ide-helper does not recognize this method being an Attribute
     * because the method has no actual return type;
     * phpdoc is ignored here deliberately due to performance reasons and also
     * isn't supported by Laravel itself.
     *
     * @return Attribute
     */
    protected function notAnAttribute()
    {
        return new Attribute(
            function (?string $value): ?string {
                return $value;
            },
            function (?string $value): ?string {
                return $value;
            }
        );
    }
}
