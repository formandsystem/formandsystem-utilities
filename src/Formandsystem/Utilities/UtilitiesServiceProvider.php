<?php namespace Formandsystem\Utilities;

use Illuminate\Support\ServiceProvider;

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
			return new Utilities;
		});
		
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Utilities', 'Formandsystem\Utilities\Facades\Utilities');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('utilities');
	}

}
