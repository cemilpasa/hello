<?php

namespace Hello\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
      $router->get('hello','Hello\Controllers\ContentController@sayHello');
    }
}
