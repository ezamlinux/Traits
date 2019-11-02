<?php

namespace Ezamux\Traits\Rest\Api;

/**
 * Trait Store
 *
 * @method store
 */
trait Store
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->update($request, null);
    }
}
