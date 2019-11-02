<?php

namespace Ezamux\Traits\Rest\Web;

/**
 * Trait Create
 *
 * @method create
 */
trait Create
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new static::$model;

        return view(static::$model::resolve('view') . '.edit', compact('model'));
    }
}
