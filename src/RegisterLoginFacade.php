<?php

namespace Devpac\RegisterLogin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devpac\RegisterLogin\Skeleton\SkeletonClass
 */
class RegisterLoginFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'register-login';
    }
}
