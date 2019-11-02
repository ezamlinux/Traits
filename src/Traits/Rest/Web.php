<?php

namespace Ezamux\Traits\Rest;

use Ezamux\Traits\Rest\Web\Create;
use Ezamux\Traits\Rest\Web\Edit;

/**
 * Trait Ezamux\Traits\Rest\Web
 *
 * @method create
 * @method edit
 */
trait Web
{
    /**
     * @method create
     */
    use Create;

    /**
     * @method edit
     */
    use Edit;
}
