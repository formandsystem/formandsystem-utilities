<?php namespace Formandsystem\Utilities;

use Illuminate\Support\ServiceProvider;
use Config;

class UtilitiesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
   * Booting
   */
	public function boot()
	{
		$this->package('formandsystem/Utilities');
		include __DIR__.'/Filters/Cachefilters.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['Utilities'] = $this->app->share(function($app)
		{
			return new \Formandsystem\Utilities\Utilities;
		});
		$this->app['Cachefilter'] = $this->app->share(function($app)
		{
			return new \Formandsystem\Utilities\Cachefilter;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Utilities', 'Formandsystem\Utilities\Facades\Utilities');
		  $loader->alias('Cachefilter', 'Formandsystem\Utilities\Facades\Cachefilter');
		});
		// @TODO: use config like Config::get('utilities::cache.clearEvent'), but does not work
		$this->app->events->listen('cache.cleared', 'Cachefilter@clear');
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

}
