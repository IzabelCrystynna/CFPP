<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /**Regra da aplicação contruída pelo gate que define que será listado apenas os clientes que o usuário(funcionário) antendeu*/
        $this->registerPolicies();
        Gate::define('lista',function($user,$cliente){
            return $user->id === $cliente->user_id;
        });

        //
    }
}
