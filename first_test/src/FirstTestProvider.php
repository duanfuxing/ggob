<?php

namespace ggob\first_test;

use Illuminate\Support\ServiceProvider;

class FirstTestProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        	__DIR__.'/../config/test.php' => config_path('test.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    	$this->app->singleton('firstTest',function($app){
    		$config = $app->make('config');
    		$url = $config->get('test.url');
    		$version = $config->get('test.version');
    		return new FirstTest($url,$version);
    	});
    }


    public function provides(){
    	return ['firstTest'];
    }
}
