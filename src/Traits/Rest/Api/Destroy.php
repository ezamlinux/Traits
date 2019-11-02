<?php

namespace Ezamux\Traits\Rest\Api;

/**
 * Trait Destroy
 *
 * @method destroy
 */
trait Destroy
{
    /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      *
      * @return \Illuminate\Http\Response
      */
    public function destroy(int $id)
    {
        $model = static::$model::findOrFail($id);

        return $model->delete();
    }
}
