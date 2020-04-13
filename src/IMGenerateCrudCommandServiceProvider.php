<?php

namespace iMokhles\IMGenerateCrudCommand;

use Illuminate\Support\ServiceProvider;
use iMokhles\IMGenerateCrudCommand\Command\IMGenerateCrudCommand;

class IMGenerateCrudCommandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->registerInstallCommand();
    }

    /**
     * Register the make:multi-auth command.
     */
    private function registerInstallCommand()
    {
        $this->app->singleton('command.imokhles.make.im_crud', function ($app) {
            return new IMGenerateCrudCommand();
        });
        $this->commands([
            'IMGenerateCrudCommand' => 'command.imokhles.make.im_crud',
        ]);
    }
}