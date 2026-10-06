<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
public function update(User $user, Post $post): bool
{
    return in_array($user->role, ['admin', 'editor']);
}

public function delete(User $user, Post $post): bool
{
    return in_array($user->role, ['admin', 'editor']);
}
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return false;
    }
}
