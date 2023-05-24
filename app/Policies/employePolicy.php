<?php

namespace App\Policies;

use App\Models\User;
use App\Models\employe;
use Illuminate\Auth\Access\Response;

class employePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(['gestionEmploye','shifttime','Repport']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, employe $employe): bool
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, employe $employe): bool
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, employe $employe): bool
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, employe $employe): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, employe $employe): bool
    {
        //
    }
}
