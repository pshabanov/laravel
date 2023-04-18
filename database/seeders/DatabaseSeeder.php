<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(10)->create();
        Post::factory(10)->create();
        AdminUser::factory(1)->create([
            'name'=> 'Admin',
            'email'=>'laravel@laravel.com',
            'password'=> bcrypt('12345'),
        ]);
    }
}
