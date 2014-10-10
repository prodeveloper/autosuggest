<?php namespace Chencha\Autosuggest;

use Chencha\Autosuggest\Engines\Pspell;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AutosuggestServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    function boot(){
        $this->package('chencha/autosuggest');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
       $this->app->bind('Chencha\Autosuggest\Domain\Config','Chencha\Autosuggest\Services\Config');

		$this->app->bind('Chencha\Autosuggest\Domain\Dictionary',function(){
           return $this->app->make('Chencha\Autosuggest\Engines\PspellConfiguration');
        });
        $this->app->bind('autosuggest',function(){
            return $this->app->make('Chencha\Autosuggest\Engines\Pspell');
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

}
