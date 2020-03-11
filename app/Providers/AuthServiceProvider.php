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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function($user) {
            return $user->user_type == 'admin';
        });
        /**
         * Define Gate for editor user role
         * Returns true if user role is set to editor
         **/ 
        Gate::define('isUser', function($user) {
            return $user->user_type == 'user';
        });
        /**
         * Define Gate for guest user role
         * Returns true if user role is set to guest
         **/ 
        Gate::define('isInst', function($user) {
            return $user->user_type == 'institution';
        });

        //
    }
}
