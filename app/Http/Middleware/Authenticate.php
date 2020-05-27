<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $route;

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $prefix = $request->route()->getPrefix();
        
        if ($prefix == '/admin' && !$request->expectsJson()):
            $this->route = 'admin/login';
        elseif (!$request->expectsJson()):
            $this->route = 'login';
        endif;
        
        return $this->route;
    }
}
