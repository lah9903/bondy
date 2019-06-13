<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
		Gate::define('admin', function($user) {
            if ($this->$user = User::ROLE_ADMIN) {
                return true;
            }
            return false;
        });

        Gate::define('staff', function($user){
            if ($this->user = User::ROLE_ADMIN || $this->user = User::ROLE_STAFF) {
                return true;
            }
            return false;
        }) ;
        //
    }
}
