<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Attributes\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

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
