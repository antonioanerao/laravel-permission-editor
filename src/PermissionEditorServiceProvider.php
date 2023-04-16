<?php

namespace Antonioanerao\LaravelPermissionEditor;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Antonioanerao\LaravelPermissionEditor\Http\Middleware\SpatiePermissionMiddleware;



class PermissionEditorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::prefix('permission-editor')
            ->as('permission-editor.')
            ->middleware(config('permission-editor.middleware', ['web', 'spatie-permission']))
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('spatie-permission', SpatiePermissionMiddleware::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'permission-editor');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('permission-editor'),
            ], 'assets');

            $this->publishes([
                __DIR__.'/../config/permission-editor.php' => config_path('permission-editor.php'),
            ], 'permission-editor-config');

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            $this->publishes([
                __DIR__ . '/../database/migrations/2023_04_16_100000_create_tasks_table.php' =>
                    database_path('migrations/2023_04_16_100000_create_tasks_table.php'),

                __DIR__ . '/../database/migrations/2023_04_16_100001_create_books_table.php' =>
                    database_path('migrations/2023_04_16_100001_create_books_table.php'),

                // More migration files here
            ], 'migrations');
        }
    }
}

