<?php

namespace App\Http\Services;

use RequestHelper;
// use App\Facades\RequestHelperFacade as RequestHelper;

class HelperService
{
    public function request()
    {
        return RequestHelper::guzzleRequest(
            'get',
            env('JOKE_API'),
            [
                'queries' => [
                    'blacklistFlags' => "nsfw,religious,political,racist,sexist,explicit"
                ]
            ]
        );
        # TODO: convert to json here.
    }
}
