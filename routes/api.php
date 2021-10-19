<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\V1\PostController as PostV1;
use Api\V2\PostController as PostV2;



/* Route::apiResource('v1/posts', Api\V1\PostController::class); */



Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostV1::class, ['as' => 'v1'])
        ->only(['index', 'show', 'destroy']);
});


Route::prefix('v2')->group(function () {
    Route::apiResource('posts', PostV2::class, ['as' => 'v2'])
        ->only(['index', 'show']);
    /* Route::post('oauth/token', "\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken"); */
});

/* Ve a tu archivo app/Providers/AuthServiceProvider.php y en el método boot, llama a Passport de la siguiente forma: Passport::routes(null, ['prefix' => 'api/oauth']);. */


/* Route::post('oauth/token', AccessTokenController::class)->only(['issueToken']); */

/* ->middleware('scope:admin') */


/* Funcionan con el controller AuthController creado por mi */
/* Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
}); */

/* $this->routes(function () {
    Route::prefix('api/v1')
        ->middleware('api')
        ->namespace($this->namespace)
        ->group(base_path('routes/api/v1.php'));

    Route::prefix('api/v2')
        ->middleware('api')
        ->namespace($this->namespace)
        ->group(base_path('routes/api/v2.php'));

    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
}); */

/* Route::post('post/delete', 'App\Http\Controllers\Api\V1\PostController@destroy'); */
