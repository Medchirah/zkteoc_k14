<?php

namespace App\Policies;

use App\Models\User;
use App\Models\timerecord;
use Illuminate\Auth\Access\Response;

class timerecordPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(['Device','shifttime','Repport']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, timerecord $timerecord)
    {
        return $user->hasRole(['Device','shifttime']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasRole(['Repport']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, timerecord $timerecord)
    {
        return $user->hasRole(['Repport']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, timerecord $timerecord)
    {
        return $user->hasRole(['Repport']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, timerecord $timerecord)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, timerecord $timerecord)
    {
        //
    }
}
