<?php

namespace Tests;

use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    public function createUser()
    {
        $this->user = User::factory()->create();
    }

    /**
     * @uses TestCase::createUser()
     */
    public function createArticle()
    {
        $this->article  = Article::factory()->create([
            'user_id' => $this->user->id,
            'photo' => "photos/test.png",
        ]);
    }
}
