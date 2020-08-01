<?php

namespace App\Policies;

use App\Receipes;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceipesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any receipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the receipes.
     *
     * @param  \App\User  $user
     * @param  \App\Receipes  $receipes
     * @return mixed
     */
    public function view(User $user, Receipes $receipes)
    {
        return $receipes->owner_id == $user->id;
    }

    /**
     * Determine whether the user can create receipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the receipes.
     *
     * @param  \App\User  $user
     * @param  \App\Receipes  $receipes
     * @return mixed
     */
    public function update(User $user, Receipes $receipes)
    {
        //
    }

    /**
     * Determine whether the user can delete the receipes.
     *
     * @param  \App\User  $user
     * @param  \App\Receipes  $receipes
     * @return mixed
     */
    public function delete(User $user, Receipes $receipes)
    {
        //
    }

    /**
     * Determine whether the user can restore the receipes.
     *
     * @param  \App\User  $user
     * @param  \App\Receipes  $receipes
     * @return mixed
     */
    public function restore(User $user, Receipes $receipes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the receipes.
     *
     * @param  \App\User  $user
     * @param  \App\Receipes  $receipes
     * @return mixed
     */
    public function forceDelete(User $user, Receipes $receipes)
    {
        //
    }
}
