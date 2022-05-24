<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function show($name) {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];

        if (array_key_exists($name, $users)) {
            return $users[$name];
        }else {
            return view('post.show', ['var1' => '1', 'var2' => '2']);
        }
    }

    public function admin() {
        $text1 = 'e[vnjmvipnvifpevnfnvfdsvf';
        $text2 = 'ddddddddddddddddddddddddd';
        return view('post.admin', ['title' => "the title", 'text1'=> $text1, 'text2' => $text2]);
    }

    public function all() {

        $user = ['name' => 'иван', 'age' => 28, 'salary' => 1500];

        return view('post.home', ['user' => $user]);
    }
}
