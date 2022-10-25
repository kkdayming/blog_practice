<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mails\VerifyUser;
use App\Jobs\SendVerifyEmailJob;

class MailService
{
    public function sendVerifyEmail(string $email = "fake@mail.com")
    {
        $verifyCode = hash('sha256', time());
        Redis::executeRaw(['set', "verify:${verifyCode}", $email]);
        Redis::executeRaw(['EXPIRE', "verify:${verifyCode}", 300]);
        SendVerifyEmailJob::dispatch($verifyCode, $email);
    }
}
