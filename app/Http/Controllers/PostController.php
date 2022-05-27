<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    public function task() {

        $str = '<b>если вы видите это текст то вы старше 18 лет.</b>';
        $age = 18;
        $arr = ['bir', 'ikki', 'uch', "to'rt"];
        $arr2 = [1, 2, 3, 4, 5];
        $user = ['user1'];
        $users = [
            [
                'name' => 'user1',
                'age'  => 21,
            ],
            [
                'name' => 'user2',
                'age'  => 22,
            ],
            [
                'name' => 'user3',
                'age'  => 23,
            ],
        ];
        $employees = [
            [
                'name'    => 'user1',
                'surname' => 'surname1',
                'salary'  => 1000,
            ],
            [
                'name'    => 'user2',
                'surname' => 'surname2',
                'salary'  => 2000,
            ],
            [
                'name'    => 'user3',
                'surname' => 'surname3',
                'salary'  => 3000,
            ],
        ];

        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
        $employees2 = [
            [
                'name'    => 'user1',
                'surname' => 'surname1',
                'salary'  => 1000,
            ],
            [
                'name'    => 'user2',
                'surname' => 'surname2',
                'salary'  => 2000,
            ],
            [
                'name'    => 'user3',
                'surname' => 'surname3',
                'salary'  => 3000,
            ],
            [
                'name'    => 'user4',
                'surname' => 'surname4',
                'salary'  => 4000,
            ],
            [
                'name'    => 'user5',
                'surname' => 'surname5',
                'salary'  => 5000,
            ],
        ];

        $posts = DB::table('posts')
            ->select(['id', 'likes'])
            ->where('id','>', 0)
            ->orWhere(function ($query) {
                $query
                    ->where('id', '>', 0)
                    ->where('id', '<10', 0);
            })
        ->get();

        $db_users = DB::table('users')
            ->skip(0)
            ->take(10)
            ->get();

        $id = DB::table('users')
        ->leftJoin('posts', 'posts.id', '=', 'users.id')->get();

        echo $id;

        return view('post.task', [
            'str'       => $str,
            'age'       => $age,
            'arr'       => $arr,
            'arr2'      => $arr2,
            'user2'     => $user,
            'users'     => $users,
            'employees' => $employees,
            'links'     => $links,
            'employes2' => $employees2,
            'posts'     => $posts,
            'db_users'      => $db_users
        ]);
    }

    public function city() {

        $year = 2022;
        $month = 'mart';
        $day = 24;

        return view('post.city', [
            'country' => 'deutchland',
            'city'    => 'berlin',
            'year'    => $year,
            //'month'   => $month,
            //'day'     => $day
            ]);
    }

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
            return view('post.show', [
            'title' => 'show title',
            'var1'  => '1',
            'var2'  => '2'
            ]);
        }
    }

    public function admin() {
        $text1 = 'e[vnjmvipnvifpevnfnvfdsvf';
        $text2 = 'ddddddddddddddddddddddddd';
        return view('post.admin', [
        'title' => "the title",
        'text1' => $text1,
        'text2' => $text2
        ]);
    }

    public function all() {

        $user = [
        'name'   => 'иван',
        'age'    => 28,
        'salary' => 1500
        ];

        return view('post.home', ['user' => $user]);
    }
}
