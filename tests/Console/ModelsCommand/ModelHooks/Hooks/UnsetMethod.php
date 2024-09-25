<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\ModelHooks\Hooks;

use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Console\ModelsCommand;
use Sollie\LaravelIdeHelper\Contracts\ModelHookInterface;

class UnsetMethod implements ModelHookInterface
{
    public function run(ModelsCommand $command, Model $model): void
    {
        $command->unsetMethod('newmodelquery');
    }
}
