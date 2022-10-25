<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Carbon;


class UserRepository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function setUserVerified($email)
    {
        $user = User::where('email', '=', $email)
            ->first();

        $user->update(['email_verified_at' => Carbon::now()]);
    }
}
