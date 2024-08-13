<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class ProductPolicy
{
    public function before(User $user): bool | null
    {
        if ($user->isAdministrator()) {
            return true;
        }
        return null;
    }

    public function create(): bool
    {
        return false;
    }
}
