<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        health: '/up',
        commands: __DIR__ . '/../routes/console.php',
        using: function () {

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Group for admin routes with the admin guard
            Route::middleware(['web', 'auth:admin'])
                ->group(base_path('routes/admin.php'));

        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => App\Http\Middleware\Role::class,
            'admin' => App\Http\Middleware\Admin::class,
            'client' => App\Http\Middleware\Client::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
