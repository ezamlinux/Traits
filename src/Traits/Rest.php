<?php

namespace Ezamux\Traits;

use Ezamux\Traits\Rest\Api;
use Ezamux\Traits\Rest\Web;

/**
 * Trait Ezamux\Traits\Rest
 *
 * @method destroy
 * @method index
 * @method show
 * @method store
 * @method update
 * @method create
 * @method edit
 */
trait Rest
{
    /**
     * @method destroy
     * @method index
     * @method show
     * @method store
     * @method update
     */
    use Api;

    /**
     * @method create
     * @method edit
     */
    use Web;
}
