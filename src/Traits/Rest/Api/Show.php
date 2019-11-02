<?php

namespace Ezamux\Traits\Rest\Api;

/**
 * Trait Show
 *
 * @method show
 */
trait Show
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return static::$model::findOrFail($id);
    }
}
