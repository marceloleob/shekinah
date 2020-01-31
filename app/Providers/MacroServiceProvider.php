<?php

namespace App\Providers;

use App\Helpers\Macros;
use Collective\Html\HtmlServiceProvider;

/**
 * Class MacroServiceProvider
 * @package App\Providers
 */
class MacroServiceProvider extends HtmlServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->registerAlertBuilder();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the alert builder instance.
     *
     * @return void
     */
    protected function registerAlertBuilder()
    {
        $this->app->singleton('form', function ($app)
        {
            $form = new Macros($app['html'], $app['url'], $app['view'], $app['session.store']->token());

            return $form->setSessionStore($app['session.store']);
        });
    }
}
