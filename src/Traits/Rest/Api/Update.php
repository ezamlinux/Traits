<?php

namespace Ezamux\Traits\Rest\Api;

/**
 * Trait Update
 *
 * @method update
 */
trait Update
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $model = static::$model::firstOrNew(compact('id'));

        $model->update($request->all());

        return $model;
    }
}
