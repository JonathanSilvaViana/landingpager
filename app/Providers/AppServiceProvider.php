<?php

namespace SistemaLaravel\Providers;

use Illuminate\Support\ServiceProvider;
#use SistemaLaravel\NotificacaoInterface;
use SistemaLaravel\NotificarPombo;
use App\NotificacaoInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Informando que, ao injetar a NotificacaoInterface, retorne uma instancia de NotificarPombo
        $this->app->bind(\App\NotificacaoInterface::class , \SistemaLaravel\NotificarPombo::class);
    }
}
