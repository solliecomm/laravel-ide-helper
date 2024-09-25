<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Pivot\Models;

use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Pivot\Models\Pivots\CustomPivot;

class ModelWithPivot extends Model
{
    public function relationWithCustomPivot()
    {
        return $this->belongsToMany(ModelwithPivot::class)
            ->using(CustomPivot::class)
            ->as('customAccessor');
    }
}
