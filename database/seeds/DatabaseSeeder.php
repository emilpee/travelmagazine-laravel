<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 10)->create();
        factory(User::class, 10)->create();
    }
}
