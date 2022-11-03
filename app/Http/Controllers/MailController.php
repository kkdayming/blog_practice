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
        $body = json_decode($request->getContent());
        $this->service->sendVerifyEmail($body->mail);
        return response()->json([], 204);
    }
}
