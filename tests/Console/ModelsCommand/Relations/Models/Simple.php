<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\ModelsOtherNamespace\AnotherModel;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\ModelsOtherNamespace\AnotherModelWithAGlobalScope;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Relations\Traits\HasTestRelations;

class Simple extends Model
{
    use HasTestRelations;

    // Regular relations
    public function relationHasMany(): HasMany
    {
        return $this->hasMany(Simple::class);
    }

    public function relationHasOne(): HasOne
    {
        return $this->hasOne(Simple::class);
    }

    public function relationHasOneWithDefault(): HasOne
    {
        return $this->hasOne(Simple::class)->withDefault();
    }

    public function relationBelongsTo(): BelongsTo
    {
        return $this->belongsTo(Simple::class);
    }

    public function relationBelongsToMany(): BelongsToMany
    {
        return $this->belongsToMany(Simple::class);
    }

    public function relationBelongsToManyWithSub(): BelongsToMany
    {
        return $this->belongsToMany(Simple::class)->where('foo', 'bar');
    }

    public function relationBelongsToManyWithSubAnother(): BelongsToMany
    {
        return $this->relationBelongsToManyWithSub()->where('foo', 'bar');
    }

    public function relationMorphTo(): MorphTo
    {
        return $this->morphTo();
    }

    public function relationMorphOne(): MorphOne
    {
        return $this->morphOne(Simple::class, 'relationMorphTo');
    }

    public function relationMorphMany(): MorphMany
    {
        return $this->morphMany(Simple::class, 'relationMorphTo');
    }

    public function relationMorphedByMany(): MorphToMany
    {
        return $this->morphedByMany(Simple::class, 'foo');
    }

    // Custom relations

    public function relationBelongsToInAnotherNamespace(): BelongsTo
    {
        return $this->belongsTo(AnotherModel::class);
    }

    public function relationBelongsToSameNameAsColumn(): BelongsTo
    {
        return $this->belongsTo(AnotherModel::class, __FUNCTION__);
    }

    public function relationBelongsToToAModelWithAGlobalScope(): BelongsTo
    {
        return $this->belongsTo(AnotherModelWithAGlobalScope::class);
    }

    public function relationSampleToManyRelationType()
    {
        return $this->testToOneRelation(Simple::class);
    }

    public function relationSampleRelationType()
    {
        return $this->testToManyRelation(Simple::class);
    }

    public function relationSampleToAnyRelationType()
    {
        return $this->testToAnyRelation(Simple::class);
    }

    public function relationSampleToAnyMorphedRelationType()
    {
        return $this->testToAnyMorphedRelation(Simple::class);
    }

    public function relationSampleToBadlyNamedNotManyRelation()
    {
        return $this->testToBadlyNamedNotManyRelation(Simple::class);
    }
}
