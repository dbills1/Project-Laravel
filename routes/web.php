<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Zhongli",
        "email" => "jonglay@gmail.com",
        "image" => "zhongli.jpg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Don Bill",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatem hic quaerat perspiciatis quos harum corporis aspernatur maxime voluptate quibusdam labore cumque, nobis consequuntur.
                    Neque, nulla tempore distinctio fugit nam maxime, quos itaque aliquam mollitia, praesentium eos voluptatem sequi.
                    Ex nulla facilis quas fugit perspiciatis veritatis culpa et asperiores iure alias quia voluptatem eveniet ea nostrum,
                    nam quod tempore esse ad nemo temporibus voluptas, aut officia animi? Amet dignissimos repellat laudantium, ab labore harum fugit,
                    possimus omnis quidem id dolorum reprehenderit."
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Mamad",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Sunt sed sint laudantium id minima tenetur praesentium exercitationem veniam velit eligendi neque deserunt sapiente,
                    aliquid, recusandae possimus harum rem a quos ullam facilis? V
                    oluptas sequi amet assumenda eum animi sed autem dolores itaque,
                    ab repellat nulla ducimus asperiores in suscipit doloremque sunt perspiciatis nesciunt iure inventore consequuntur a
                    blanditiis dolore nemo deserunt? Sint ducimus nisi sunt. Nisi recusandae libero, voluptates, vitae,
                    accusamus earum laudantium pariatur odio itaque harum magnam necessitatibus quam molestias enim dolor nam blanditiis voluptatibus.
                    Illum numquam cupiditate quas, harum recusandae odio, explicabo accusamus dolores excepturi officiis, dolorem error!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post

Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Don Bill",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatem hic quaerat perspiciatis quos harum corporis aspernatur maxime voluptate quibusdam labore cumque, nobis consequuntur.
                    Neque, nulla tempore distinctio fugit nam maxime, quos itaque aliquam mollitia, praesentium eos voluptatem sequi.
                    Ex nulla facilis quas fugit perspiciatis veritatis culpa et asperiores iure alias quia voluptatem eveniet ea nostrum,
                    nam quod tempore esse ad nemo temporibus voluptas, aut officia animi? Amet dignissimos repellat laudantium, ab labore harum fugit,
                    possimus omnis quidem id dolorum reprehenderit."
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Mamad",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Sunt sed sint laudantium id minima tenetur praesentium exercitationem veniam velit eligendi neque deserunt sapiente,
                    aliquid, recusandae possimus harum rem a quos ullam facilis? V
                    oluptas sequi amet assumenda eum animi sed autem dolores itaque,
                    ab repellat nulla ducimus asperiores in suscipit doloremque sunt perspiciatis nesciunt iure inventore consequuntur a
                    blanditiis dolore nemo deserunt? Sint ducimus nisi sunt. Nisi recusandae libero, voluptates, vitae,
                    accusamus earum laudantium pariatur odio itaque harum magnam necessitatibus quam molestias enim dolor nam blanditiis voluptatibus.
                    Illum numquam cupiditate quas, harum recusandae odio, explicabo accusamus dolores excepturi officiis, dolorem error!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
