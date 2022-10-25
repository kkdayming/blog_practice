<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ArticleTest extends TestCase
{
    public function testIndex()
    {
        $this->createUser();
        $this->createArticle();

        $response = $this->get('/api/articles');
        $response
            ->assertOK()
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'user_id',
                        'title',
                        'tags',
                        'description',
                        'photo',
                        'created_at',
                        'updated_at',
                    ]
                ]
            ]);
    }

    public function testShow()
    {
        $this->createUser();
        $this->createArticle();
        $response = $this->getJson("/api/articles/{$this->article->id}");
        $response
            ->assertOK()
            ->assertJsonStructure([
                "data" =>
                [
                    'id',
                    'user_id',
                    'title',
                    'tags',
                    'description',
                    'photo',
                    'created_at',
                    'updated_at',
                ]
            ]);
    }

    public function testStore()
    {
        $this->createUser();
        $this->actingAs($this->user);

        $response = $this
            ->post('/api/articles', [
                'user_id' => $this->user->id,
                'title' => 'fakeTitle',
                'tags' => 'fakeTags',
                'description' => 'fakeDescription',
                'photo' => 'photos/test.png',
                'visible' => 1,
            ]);
        $response->assertStatus(204);
    }

    // public function testDestroy()
    // {
    //     $this->createUser();
    //     $this->createArticle();
    //     $response = $this->delete("/api/articles/{$this->article->id}", []);
    //     $response->assertStatus(204);
    // }
}
