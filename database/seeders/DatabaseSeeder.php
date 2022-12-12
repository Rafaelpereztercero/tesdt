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
        \App\Models\User::factory(5)->has(\App\Models\Profile::factory(1))->create();
        \App\Models\User::factory(3)->has(\App\Models\Community::factory(1))->create();
        \App\Models\User::factory(5)->has(\App\Models\Post::factory(3)->has(\App\Models\Comment::factory(2)))->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
