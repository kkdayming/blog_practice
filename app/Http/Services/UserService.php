<?php

namespace App\Http\Services;

use Exception;
use Illuminate\Support\Facades\Redis;
use App\Http\Repositories\UserRepository;

class UserService
{
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function verifyUser(string $verifyCode)
    {
        $email = Redis::executeRaw(['get', "verify:${verifyCode}"]);
        if (!$email) throw new Exception("verify failure.");
        $this->repo->setUserVerified($email);
    }
}
