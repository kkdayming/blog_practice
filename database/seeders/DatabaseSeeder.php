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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
        $countries = Country::factory(5)->create();
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

        $user = User::factory()->create([
            'email' => 'test@email.com',
            'password' => bcrypt('secret'),
            'countries_id' => $countries[0]->id,
        ]);



        Article::factory(20)->create([
            'user_id' => $user->id,
            'photo' => 'photos/PzayhN9Uf0D4IQCDB3bc0JF20bqJxxEzIvkS2hb0.png',
        ]);
    }
}
