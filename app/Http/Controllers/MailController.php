<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MailService;

class MailController extends Controller
{
    private $service;
    public function __construct(MailService $service)
    {
        $this->service = $service;
    }

    public function verify(Request $request)
    {
        $json = $request->getContent();
        $mail = json_decode($json)->mail;
        $this->service->sendVerifyEmail($mail);
        return response()->json([], 204);
    }
}
