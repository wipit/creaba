<?php

namespace creaBuenosAires\Providers;

use Illuminate\Support\ServiceProvider;

class InteresesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("usuario.perfil", function($view){
            $view->with([
                "intereses" => \creaBuenosAires\Interes::all()->pluck("interes", "id")
            ]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
