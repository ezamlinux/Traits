<?php

namespace Ezamux\Traits\Determinator;

use Auth;

/**
 * Trait Updator
 *
 * @method updator
 * @method bootUpdator
 */
trait Updator
{
    /**
     * Relations
     */
    public function updator()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    /**
     *Updated_by
     */
    public static function bootUpdator()
    {
        static::updating(function ($table) {
            $table->updated_by = optional(Auth::user())->id;
        });
    }
}
