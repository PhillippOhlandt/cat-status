<?php

namespace Ohlandt\CatStatus;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Ohlandt\CatStatus\CatStatus;

class CatStatusServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        	$this->app['catstatus'] = $this->app->share(function ($app) {
	        	return new CatStatus;
        	});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	public function boot()
	{
		$this->package('ohlandt/catstatus');

        	AliasLoader::getInstance()->alias('CatStatus', 'Ohlandt\CatStatus\CatStatusFacade');
	}
}
