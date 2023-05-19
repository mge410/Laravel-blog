<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $User): bool
    {
        return $User->role->title === 'admin';
    }
}
