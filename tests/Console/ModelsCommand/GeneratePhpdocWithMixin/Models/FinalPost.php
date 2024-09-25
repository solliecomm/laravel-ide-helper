<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\GeneratePhpdocWithMixin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $someProp
 * @method someMethod(string $method)
 * @mixin IdeHelperPost
 */
final class FinalPost extends Model
{
}
