<?php

namespace App\Http\Services;

use Mockery\Undefined;
use RequestHelper;

class RequestService
{
    public function request(object $params)
    {
        $result = RequestHelper::httpRequest(
            $params->method,
            $params->url,
            (isset($params->options)) ? (array)$params->options : []
        );
        return json_decode($result);
    }
}
