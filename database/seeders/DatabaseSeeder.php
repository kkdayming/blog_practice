<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;
use App\Models\Article;
use App\Models\RoleUser;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Taggable;
use App\Models\Video;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::factory(5)->create();
        $user = User::factory()->create([
            'email' => 'test@email.com',
            'password' => bcrypt('secret'),
            'countries_id' => $countries[0]->id,
        ]);

        $tags = Tag::factory(2)->create();
        $video = Video::factory()->create();
        $articles = Article::factory(2)->create([
            'user_id' => $user->id,
        ]);
        $taggables = Taggable::factory()->createMany([
            [
                'tag_id' => $tags[0]->id,
                'taggable_id' => $video->id,
                'taggable_type' => "App\Models\Video",
            ],
            [
                'tag_id' => $tags[0]->id,
                'taggable_id' => $articles[0]->id,
                'taggable_type' => "App\Models\Article",
            ],
            [
                'tag_id' => $tags[1]->id,
                'taggable_id' => $articles[1]->id,
                'taggable_type' => "App\Models\Article",
            ]
        ]);

        $photos = Photo::factory()->createMany([
            [
                'imageable_id' => 1,
                'imageable_type' => "App\Models\User",
            ],
            [
                'imageable_id' => 1,
                'imageable_type' => "App\Models\Article",
            ]
        ]);

        $roles = Role::factory(2)->create();
        $users = User::factory(2)->create([
            'password' => bcrypt('secret'),
            'countries_id' => $countries[0]->id,
        ]);

        RoleUser::factory()->createMany([
            [
                'role_id' => $roles[0]->id,
                'user_id' => $users[0]->id,
            ],
            [
                'role_id' => $roles[1]->id,
                'user_id' => $users[1]->id,
            ]
        ]);

        Article::factory(20)->create([
            'user_id' => $user->id,
            'photo' => 'photos/PzayhN9Uf0D4IQCDB3bc0JF20bqJxxEzIvkS2hb0.png',
        ]);
    }
}
