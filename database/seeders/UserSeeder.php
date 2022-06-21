<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)
            ->has(
                Post::factory()->count(random_int(1, 3))
                    ->has(Comment::factory()->count(random_int(2, 4)))
            )
            ->create();
    }
}
