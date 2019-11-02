<?php

namespace Ezamux\Traits\Rest;

use Ezamux\Traits\Rest\Api\Destroy;
use Ezamux\Traits\Rest\Api\Index;
use Ezamux\Traits\Rest\Api\Show;
use Ezamux\Traits\Rest\Api\Store;
use Ezamux\Traits\Rest\Api\Update;

/**
 * Trait Ezamux\Traits\Rest\Api
 *
 * @method destroy
 * @method index
 * @method show
 * @method store
 * @method update
 */
trait Api
{
    /**
     * @method destroy
     */
    use Destroy;

    /**
     * @method index
     */
    use Index;

    /**
     * @method show
     */
    use Show;

    /**
     * @method store
     */
    use Store;

    /**
     * @method update
     */
    use Update;
}
