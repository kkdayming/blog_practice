<?php

namespace App\Jobs;

use App\Mails\VerifyUser;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendVerifyEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $verifyCode;
    private string $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $verifyCode, string $email)
    {
        $this->verifyCode = $verifyCode;
        $this->email = $email;
    }

    /**
     * Execute the job.
     * 
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)
            ->send(new VerifyUser($this->verifyCode));
    }
}
