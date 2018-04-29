<?php

namespace Hello\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
  public function register()
{
  $this->getApplication()->register(HelloRouteServiceProvider::class);
}
}
