<?php

namespace App\Policies;

use App\Models\TopPage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TopPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TopPage $topPage)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TopPage $topPage)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TopPage $topPage)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TopPage $topPage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TopPage $topPage)
    {
        //
    }
}
