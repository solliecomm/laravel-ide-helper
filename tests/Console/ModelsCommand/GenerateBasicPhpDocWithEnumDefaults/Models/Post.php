<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GenerateBasicPhpDocWithEnumDefaults\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GenerateBasicPhpDocWithEnumDefaults\Enums\PostStatus;

class Post extends Model
{
    public function scopeHasStatus(Builder $query, ?PostStatus $status = PostStatus::Published)
    {
        //
    }
}
