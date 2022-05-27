<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;




class CreatePosts extends Seeder
{
    public function run() {

        DB::table('posts')->insert([
            'title'  => 'odambek',
            'slug'   => 'post-1',
            'likes'  => 78
        ]);
    }
}
