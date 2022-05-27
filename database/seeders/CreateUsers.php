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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUsers extends DatabaseSeeder
{
    public function run() {
        DB::table('users')->insert([
            'name'   => 'odam',
            'email'  => Str::random(8) . '@gmail.com',
            'age'    => 19,
            'salary' => 550
        ]);
    }
}
