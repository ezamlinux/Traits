<?php

namespace Ezamux\Traits\Rest\Api;

/**
 * Trait Index
 *
 * @method index
 */
trait Index
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return static::$model::all();
    }
}
