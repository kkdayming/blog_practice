<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class RequestHelper
{

    public function request(array $params)
    {
    }
    private function get(string $url, array|string|null $query = null)
    {
        try {
            $response = json_decode(Http::get($url, $query));
            return $response;
        } catch (Exception $exp) {
            Log::error("--------------------------------------------------\n
            RequestHelper: get() failed.\n
            \$url: {$url}\n
            \$params: {$query}");
        }
    }

    private function post(string $url, array $data = [])
    {
        try {
            $response = json_decode(Http::post($url, $data));
            return $response;
        } catch (Exception $exp) {
            Log::error("--------------------------------------------------");
            Log::error("RequestHelper: post() failed.");
            Log::error("\$url: {$url}");
            Log::error("\$query: {$data}");
        }
    }
}
