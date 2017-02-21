<?php

namespace creaBuenosAires\Providers;

use Illuminate\Support\ServiceProvider;

class FormacionServiceProvider extends ServiceProvider
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
                "estudios" => \creaBuenosAires\Estudio::all()->pluck("nivel", "id"),
                "titulos" => \creaBuenosAires\Titulo::all()->pluck("diploma", "id"),
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
    }
}
