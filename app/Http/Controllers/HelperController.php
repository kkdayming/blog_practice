<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HelperService;

class HelperController extends Controller
{
    private $service;
    public function __construct(HelperService $service)
    {
        $this->service = $service;
    }

    public function test()
    {
        return $this->service->get(env('COLLECTION_URL'));
    }
}
