<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Contracts\ModelHookInterface;

class CustomMethod implements ModelHookInterface
{
    public function run(ModelsCommand $command, Model $model): void
    {
        $command->setMethod('custom', $command->getMethodType($model, Builder::class), ['$custom']);
    }
}
