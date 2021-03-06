<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
