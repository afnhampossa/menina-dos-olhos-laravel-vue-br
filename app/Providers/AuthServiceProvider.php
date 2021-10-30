<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        $gate->before(function($user)
        {
            if ($user->isSuperAdmin()){
                return true;
            }else{
                $permisssions = Permission::all();
                foreach ($permisssions as $permisssion)
                {
                    Gate::define($permisssion->slug, function ($user) use ($permisssion) {
                        return $user->hasPermission($permisssion);
                    });
                }
            }


        });
    }
}
