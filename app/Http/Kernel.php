<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // global middleware (can leave empty for minimal setup)
    ];

    protected $middlewareGroups = [
        'web' => [
            // optional: start session if you want auth to work
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'isAdmin' => \App\Http\Middleware\IsAdmin::class,
    ];
}
