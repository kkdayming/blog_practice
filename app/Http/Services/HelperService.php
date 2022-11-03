<?php

namespace App\Http\Services;

use RequestHelper;
// use App\Facades\RequestHelperFacade as RequestHelper;

class HelperService
{
    public function request()
    {
        $result = RequestHelper::guzzleRequest(
            'get',
            env('JOKE_API'),
            [
                'queries' => [
                    'blacklistFlags' => "nsfw,religious,political,racist,sexist,explicit"
                ]
            ]
        );
        return json_decode($result);
    }
}
