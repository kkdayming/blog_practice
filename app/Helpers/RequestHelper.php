<?php

namespace App\Helpers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

enum Method
{
    case get;
    case post;
    case put;
    case delete;
    case patch;
}

class RequestHelper
{
    private $request;
    public function __construct()
    {
        $this->request = Http::dd();
    }

    /**
     * @param string $params
     * @param string $url
     * @param array opt[token, body, contentType, queries, payload]
     */
    public function request(string $method, string $url, array $opt = [])
    {
        if (isset($opt['token'])) $this->request->dd()->withToken($opt['token']);
        if (isset($opt['body']) && isset($opt['contentType'])) $this->request->dd()->withBody($opt['body'], $opt['contentType']);

        $params = [
            $url,
            isset($opt['queries']) ? $opt['queries'] : [],
        ];

        try {
            return $this->request->$method(...$params)->json();
        } catch (Exception $e) {
            dd('error');
            Log::error("500" . "RequestHelper Request() failed.");
        }
    }

    /**
     * @param string $params
     * @param string $url
     * @param array opt[token, body, contentType, queries, payload]
     */
    public function httpRequest(string $method, string $url, array $opt = [])
    {
        try {
            return Http::retry(3, 3000)
                ->send($method, $url, $opt);
        } catch (Exception $e) {
            dd('error');
            Log::error("Request failed, in RequestHelper request Method: {$method}, Url: {$url}");
        }
    }

    public function guzzleRequest(string $method, string $url, array $opt = [])
    {
        $client = new Client();

        try {
            return $client
                ->request($method, $url, $opt)
                ->getBody();
        } catch (ClientException $e) {
            Log::error("ClientException, in RequestHelper g_request Method: {$method}, Url: {$url}");
        } catch (RequestException $e) {
            Log::error("RequestException, in RequestHelper g_request Method: {$method}, Url: {$url}");
        }
    }
}
