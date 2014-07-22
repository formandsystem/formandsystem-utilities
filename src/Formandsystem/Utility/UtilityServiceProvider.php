<?php namespace Formandsystem\Utility;

use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider {

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
		$this->package('formandsystem/Utility');
	}
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['Utility'] = $this->app->share(function($app)
		{
			return new Utility;
		});
		
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Utility', 'Formandsystem\Utility\Facades\Utility');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('utility');
	}

}
