<?php

namespace App\Policies;

use App\Models\User;
use App\Models\departement;
use Illuminate\Auth\Access\Response;

class departementPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(['gestionEmploye','Repport']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, departement $departement)
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, departement $departement)
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, departement $departement)
    {
        return $user->hasRole(['gestionEmploye']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, departement $departement)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, departement $departement)
    {
        //
    }
}
