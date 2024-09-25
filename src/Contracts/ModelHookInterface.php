<?php

namespace Sollie\LaravelIdeHelper\Contracts;

use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Console\ModelsCommand;

interface ModelHookInterface
{
    public function run(ModelsCommand $command, Model $model): void;
}
