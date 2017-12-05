<?php

namespace App\Repositories\User;
 

use App\User;
use Illuminate\Http\Request;

class UserRepository
{

    public function __construct(User $user){
        $this->user = $user;
    }


    public function checkExists($email){

        if(count($this->user->where('email','=',$email)->get()->first()) > 0) {
            return true;
        }

        return false;

    }
}