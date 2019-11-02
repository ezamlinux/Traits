<?php

namespace Ezamux\Traits;

use Illuminate\Support\Str;

/**
 * Trait Resolver
 *
 * resolve generic name for Laravel structure based on Model Name
 *
 * @method resolve
 * @method getRoute
 * @method getSession
 * @method getView
 */
trait Resolver
{
    // PRIVATE METHOD

    /**
     * Resolve name from classname
     *
     * @return string
     */
    private static function resolveName()
    {
        $explode = explode('\\', self::class);

        return static::$name ?? Str::kebab(end($explode));
    }

    // PUBLIC METHOD

    /**
     * elegant accessor for static variable
     *
     * @return string
     */
    public static function resolve(string $parameter) : string
    {
        $method = 'get'. ucfirst($parameter);

        return method_exists(__CLASS__, $method) ? self::$method() : (static::$parameter ?? null);
    }

    /**
     * Return the hypothetical name of view directory
     * can be overrided with static::$view < static::$name
     *
     * @return string
     */
    public static function getView() : string
    {
        return static::$view ?? self::resolveName();
    }

    /**
     * Return the hypothetical name of session
     * can be overrided with static::$session < static::$name
     *
     * @return string
     */
    public static function getSession() : string
    {
        return static::$session ?? self::resolveName();
    }

    /**
     * Return the hypothetical name of route (without the interface prefix)
     * can be overrided with static::$route < static::$name
     *
     * @return string
     */
    public static function getRoute() : string
    {
        return static::$route ?? self::resolveName();
    }
}
