<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\CustomSpace\ModelWithCustomNamespaceFactory;

/**
 * 
 *
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\CustomSpace\ModelWithCustomNamespaceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithCustomNamespace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithCustomNamespace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithCustomNamespace query()
 * @mixin \Eloquent
 */
class ModelWithCustomNamespace extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ModelWithCustomNamespaceFactory::new();
    }
}
<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Factories\ModelWithFactoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithFactory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithFactory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithFactory query()
 * @mixin \Eloquent
 */
class ModelWithFactory extends Model
{
    use HasFactory;
}
<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Models;

/**
 * 
 *
 * @method static \Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Factories\ModelWithNestedFactoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithNestedFactory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithNestedFactory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithNestedFactory query()
 * @mixin \Eloquent
 */
class ModelWithNestedFactory extends ModelWithFactory
{
}
<?php

declare(strict_types=1);

namespace Sollie\LaravelIdeHelper\Tests\Console\ModelsCommand\Factories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithoutFactory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithoutFactory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelWithoutFactory query()
 * @mixin \Eloquent
 */
class ModelWithoutFactory extends Model
{
    use HasFactory;
}
