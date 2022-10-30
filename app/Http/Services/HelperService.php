<?php

namespace App\Http\Services;

use RequestHelper;
// use App\Facades\RequestHelperFacade as RequestHelper;

class HelperService
{
    public function get(string $url, string $query = null)
    {
        $response = RequestHelper::get($url, $query);
        return $response;
    }
}
