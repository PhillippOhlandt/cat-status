<?php namespace Ohlandt\CatStatus;

use Illuminate\Support\ServiceProvider;

class CatStatusServiceProvider extends ServiceProvider {

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
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias('CatStatus', 'Ohlandt\CatStatus\CatStatus');
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

	public function boot(){
		$this->package('ohlandt/catstatus');
	}

}
