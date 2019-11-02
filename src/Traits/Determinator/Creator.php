<?php

namespace Ezamux\Traits\Determinator;

use Auth;

/**
 * Trait Creator
 *
 * @method creator
 * @method bootCreator
 */
trait Creator
{
    /**
     * Relations
     */
    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    /**
     * Created_by
     */
    public static function bootCreator()
    {
        static::creating(function ($table) {
            $table->created_by = optional(Auth::user())->id;
        });
    }
}
