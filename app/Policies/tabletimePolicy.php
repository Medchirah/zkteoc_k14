<?php

namespace App\Policies;

use App\Models\User;
use App\Models\tabletime;
use Illuminate\Auth\Access\Response;

class tabletimePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(['Repport','shifttime']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, tabletime $tabletime)
    {
        return $user->hasRole('shifttime');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasRole('shifttime');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, tabletime $tabletime)
    {
        return $user->hasRole(['shifttime','Repport']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, tabletime $tabletime)
    {
        return $user->hasRole('shifttime');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, tabletime $tabletime): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, tabletime $tabletime): bool
    {
        //
    }
}
