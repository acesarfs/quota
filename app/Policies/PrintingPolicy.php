<?php

namespace App\Policies;

use App\Printing;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class PrintingPolicy
{
    use HandlesAuthorization;

    /** 
     * Determine whether the user can view any chamados.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {   
        return true;
    }   

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
