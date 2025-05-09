<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Link;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function atualizar(User $user, Link $link){

        return $link->user->is($user)
        ? Response::allow()
        : Response::deny('Este link não é seu !!!');
    }
}

