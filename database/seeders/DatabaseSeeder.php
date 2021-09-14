<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


            User::create([
                'name' => 'Don Bill',
                'username' => 'dbill',
                'email' => 'dbill@gmail.com',
                'password' => bcrypt('password')
            ]);

        // User::create([
        //     'name' => 'Mamad',
        //     'email' => 'mamad@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis. Sunt reiciendis a voluptatibus, similique ut exercitationem minima asperiores facilis'.
        //     'consequatur odit magni dolor libero porro. Doloremque repudiandae veniam officiis, autem facere officia atque. Hic modi'.
        //     'sunt tenetur quaerat, voluptatibus illo non fuga quasi quae a impedit minima rerum asperiores accusantium sapiente'.
        //     'tempore quidem at, officiis optio eveniet rem culpa vel nisi dolorum. Ratione a delectus dolor quasi voluptatem'.
        //     'reprehenderit tenetur eius, temporibus explicabo molestias iure esse nihil odio tempore alias maiores veritatis dolore.'.
        //     'Unde distinctio rem asperiores possimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis. Sunt reiciendis a voluptatibus, similique ut exercitationem minima asperiores facilis'.
        //     'consequatur odit magni dolor libero porro. Doloremque repudiandae veniam officiis, autem facere officia atque. Hic modi'.
        //     'sunt tenetur quaerat, voluptatibus illo non fuga quasi quae a impedit minima rerum asperiores accusantium sapiente'.
        //     'tempore quidem at, officiis optio eveniet rem culpa vel nisi dolorum. Ratione a delectus dolor quasi voluptatem'.
        //     'reprehenderit tenetur eius, temporibus explicabo molestias iure esse nihil odio tempore alias maiores veritatis dolore.'.
        //     'Unde distinctio rem asperiores possimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis. Sunt reiciendis a voluptatibus, similique ut exercitationem minima asperiores facilis'.
        //     'consequatur odit magni dolor libero porro. Doloremque repudiandae veniam officiis, autem facere officia atque. Hic modi'.
        //     'sunt tenetur quaerat, voluptatibus illo non fuga quasi quae a impedit minima rerum asperiores accusantium sapiente'.
        //     'tempore quidem at, officiis optio eveniet rem culpa vel nisi dolorum. Ratione a delectus dolor quasi voluptatem'.
        //     'reprehenderit tenetur eius, temporibus explicabo molestias iure esse nihil odio tempore alias maiores veritatis dolore.'.
        //     'Unde distinctio rem asperiores possimus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, pariatur beatae repudiandae cum vitae nobis odio aperiam,'.
        //     'earum aspernatur fuga veritatis. Sunt reiciendis a voluptatibus, similique ut exercitationem minima asperiores facilis'.
        //     'consequatur odit magni dolor libero porro. Doloremque repudiandae veniam officiis, autem facere officia atque. Hic modi'.
        //     'sunt tenetur quaerat, voluptatibus illo non fuga quasi quae a impedit minima rerum asperiores accusantium sapiente'.
        //     'tempore quidem at, officiis optio eveniet rem culpa vel nisi dolorum. Ratione a delectus dolor quasi voluptatem'.
        //     'reprehenderit tenetur eius, temporibus explicabo molestias iure esse nihil odio tempore alias maiores veritatis dolore.'.
        //     'Unde distinctio rem asperiores possimus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
