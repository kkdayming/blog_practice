<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\RequestHelper;

class RequestHelperTest extends TestCase
{
    /**
     * A basic test.
     *
     * @return void
     */
    public function testRequestHelperSendRequest()
    {
        $req = new RequestHelper;
        // $params['base_uri'] = env('COLLECTION_URL');
        $params['request_method'] = 'GET';
        $params['options'] = ['verify' => false];

        $res = json_decode($req->get(env('COLLECTION_URL'), $params));
        $this->assertEquals(true, $res->status);
    }
}
