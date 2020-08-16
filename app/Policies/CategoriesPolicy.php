<?php

namespace App\Policies;

use App\Categories;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the categories.
     *
     * @param  \App\User  $user
     * @param  \App\Categories  $categories
     * @return mixed
     */
    public function view(User $user, Categories $categories)
    {
        return $categories->user_id == $user->id;
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the categories.
     *
     * @param  \App\User  $user
     * @param  \App\Categories  $categories
     * @return mixed
     */
    public function update(User $user, Categories $categories)
    {
        //
    }

    /**
     * Determine whether the user can delete the categories.
     *
     * @param  \App\User  $user
     * @param  \App\Categories  $categories
     * @return mixed
     */
    public function delete(User $user, Categories $categories)
    {
        //
    }

    /**
     * Determine whether the user can restore the categories.
     *
     * @param  \App\User  $user
     * @param  \App\Categories  $categories
     * @return mixed
     */
    public function restore(User $user, Categories $categories)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the categories.
     *
     * @param  \App\User  $user
     * @param  \App\Categories  $categories
     * @return mixed
     */
    public function forceDelete(User $user, Categories $categories)
    {
        //
    }
}
