<?php



$router->group(['prefix' => 'v1' , 'namespace' => 'v1'] , function () use ($router) {
    $router->get('courses' , 'CourseController@index');
    $router->get('courses/{id}' , 'CourseController@single');
    $router->post('login' , 'UserController@login');
    $router->post('register' , 'UserController@register');
    $router->group(['middleware' => 'auth'] , function () use ($router) {
        $router->get('/user' , function () {
            return \Auth::user();
        });
    });
});