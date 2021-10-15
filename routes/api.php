<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', Api\V1\PostController::class);

/* Route::prefix('v2')->group(function () {
    Route::apiResource('posts', Api\V1\PostController::class);
}); */
