<?php

namespace Antonioanerao\LaravelPermissionEditor;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
    }
}
