<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\device;
use App\Models\employe;
use App\Models\rapport;
use App\Models\shifttime;
use App\Models\tabletime;
use App\Models\timerecord;
use App\Models\departement;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\devicePolicy;
use App\Policies\employePolicy;
use App\Policies\rapportPolicy;
use App\Policies\shifttimePolicy;
use App\Policies\tabletimePolicy;
use App\Policies\PermissionPolicy;
use App\Policies\timerecordPolicy;
use Spatie\Permission\Models\Role;
use App\Policies\departementPolicy;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
        protected $policies = [
        device::class => devicePolicy::class,
        timerecord::class => timerecordPolicy::class,
        shifttime::class => shifttimePolicy::class,
        tabletime::class => tabletimePolicy::class,
        departement::class => departementPolicy::class,
        employe::class => employePolicy::class,
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
        


        
       ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
