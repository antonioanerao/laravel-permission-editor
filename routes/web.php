<?php

use Antonioanerao\LaravelPermissionEditor\Http\Controllers\PermissionController;
use Antonioanerao\LaravelPermissionEditor\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
