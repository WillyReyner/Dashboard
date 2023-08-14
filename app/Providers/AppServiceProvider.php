<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Adicione sua regra de validação personalizada para o campo "user"
        Validator::extend('user', function ($attribute, $value, $parameters, $validator) {
            // Implemente a lógica de validação do campo "user" aqui
            // Por exemplo, verifique se o valor é único na tabela de usuários
            // Retorne true se for válido, ou false se não for

            // Verificar se o valor é único na tabela de usuários
            $userExists = \App\Models\User::where('user', $value)->exists();

            // Retornar falso se o valor já existir na tabela
            return !$userExists;
        });
    }
}
