<?php

namespace Ezamux\Traits\Rest\Web;

/**
 * Trait Edit
 *
 * @method edit
 */
trait Edit
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = static::$model::findOrFail($id);

        return view(static::$model::resolve('view') . '.edit', compact('model'));
    }
}
