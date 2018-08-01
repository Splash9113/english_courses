<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('news', 'NewsController');
    $router->resource('groups', 'GroupController');
    $router->resource('schedules', 'ScheduleController');
    $router->resource('request-contact', 'RequestContactController');

    Route::group([
        'namespace' => 'Auth'
    ], function(Router $router) {
        // Change default user setting fields
        $router->get('auth/setting', 'AuthController@getSetting');
        $router->put('auth/setting', 'AuthController@putSetting');

        // Change default user fields
        $router->get('auth/users/create', 'UserController@create');
        $router->get('auth/users/{user}/edit', 'UserController@edit');
    });
});
