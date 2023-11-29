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
        $this->registerPolicies();
        Gate::define('isadmin',function($user){   //admin role
            return $user->role=='admin';
        });
         //define a user role 
         Gate::define('isuser', function($user) {
            if($user->role == 'user') return true;
            elseif($user->role == 'editor') return true;
            elseif($user->role == 'admin') return true;
            else return false;
        });
      
        // define a editor role 
        Gate::define('iseditor', function($user) {
            if($user->role == 'editor') return true;
            elseif($user->role == 'admin') return true;
            else return false;
        });
        //
    }
}
