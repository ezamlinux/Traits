<?php

namespace Ezamux\Traits\Determinator;

use Auth;

/**
 * Trait Deletor
 *
 * @method deletor
 * @method bootDeletor
 */
trait Deletor
{
    /**
     * Relations
     */
    public function deletor()
    {
        if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($this))) {
            return $this->belongsTo('App\User', 'deleted_by');
        }

        return null;
    }

    /**
     * Deleted_by
     */
    public static function bootDeletor()
    {
        static::deleting(function ($table) {
            if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($this))) {
                $table->deleted_by = optional(Auth::user())->id;
                $table->update();
            }
        });
    }
}
