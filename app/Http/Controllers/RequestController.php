<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\RequestService;

class RequestController extends Controller
{
    private $service;
    public function __construct(RequestService $service)
    {
        $this->service = $service;
    }

    public function request(Request $request)
    {
        $params = json_decode($request->getContent());
        $data = $this->service->request($params);
        return response()->json($data, 200);
    }
}
