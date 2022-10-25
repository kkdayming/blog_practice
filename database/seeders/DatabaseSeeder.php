<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = \App\Models\User::factory()->create([
            'email' => 'test@email.com',
            'password' => bcrypt(12345678),
        ]);

        \App\Models\Article::factory(20)->create([
            'user_id' => $user->id,
            'photo' => 'photos/PzayhN9Uf0D4IQCDB3bc0JF20bqJxxEzIvkS2hb0.png',
        ]);
    }
}
