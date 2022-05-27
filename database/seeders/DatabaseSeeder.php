<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CreatePosts;
use Database\Seeders\CreateUsers;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CreatePosts::class,
            CreateUsers::class,
        ]);
    }
}
