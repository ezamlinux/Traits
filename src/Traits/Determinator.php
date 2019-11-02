<?php

namespace Ezamux\Traits;

use Ezamux\Traits\Determinator\Creator;
use Ezamux\Traits\Determinator\Updator;
use Ezamux\Traits\Determinator\Deletor;

/**
 * Trait Determinator
 *
 * @method creator
 * @method bootCreator
 * @method updator
 * @method bootUpdator
 * @method deletor
 * @method bootDeletor
 */
trait Determinator
{
    /**
     * @method creator
     * @method bootCreator
     */
    use Creator;

    /**
     * @method updator
     * @method bootUpdator
     */
    use Updator;

    /**
     * @method deletor
     * @method bootDeletor
     */
    use Deletor;
}
