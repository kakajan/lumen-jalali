<?php
namespace jDate\Jalali;

use Illuminate\Support\ServiceProvider;

class JalaliServiceProvider extends ServiceProvider {

	 /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;
 
  /**
   * Bootstrap the application events.
   *
   * @return void
   */

 
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function boot()
  {
      $this->app->singleton(jDate::class, function ($app)
  		{
  		  return new jDate;
	});
      $this->app->alias('jDate\Jalali\jDate', 'jDate');

      $this->app->singleton(jDateTime::class, function ($app)
  		{
  		  return new jDateTime;
	});
      $this->app->alias('jDate\Jalali\jDateTime', 'jDateTime');
  }
 
  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('jalali','jDateTime');
  }

}
