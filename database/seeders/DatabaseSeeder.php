<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(3)->create();
        // User::create([
        //     'name' => 'Adi Riyanto',
        //     'email' => 'siyaga123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius, dolorem est totam adipisci laboriosam aut animi, facere ut porro minus iste magnam? Odit quidem ratione ad labore rem, eum laborum molestiae velit quod cupiditate sit minus officiis voluptate dignissimos sint aliquam eveniet tenetur dolor quae laudantium ea consectetur ullam ipsam dolore. Explicabo corrupti nobis tenetur neque sapiente labore magnam eos ex molestiae maiores quas cum tempore nesciunt quam libero harum, maxime voluptates saepe ullam? At qui quia voluptatem velit cum asperiores iure quam nam placeat sequi sapiente distinctio, tenetur nisi suscipit tempora aliquid consequuntur quos nemo beatae modi voluptas possimus? Cupiditate repellendus cum asperiores, quisquam quibusdam minus molestiae dolores et! Maxime corporis ducimus libero, .</p><p>nostrum repellat dolorem dolore sed ratione tenetur eius deleniti, sint dolores quibusdam! Molestias est, vero error tempora et reprehenderit, consequuntur consectetur delectus repudiandae nostrum adipisci asperiores distinctio magni perspiciatis mollitia provident earum natus omnis aut quis? Velit reprehenderit laudantium consectetur recusandae ad cupiditate harum? Iste fugiat consequuntur culpa qui expedita, illum ab eaque deleniti perspiciatis odio! Sequi quasi rerum saepe natus quam asperiores quos minus doloribus, unde, repellat, temporibus cum at .</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius, dolorem est totam adipisci laboriosam aut animi, facere ut porro minus iste magnam? Odit quidem ratione ad labore rem, eum laborum molestiae velit quod cupiditate sit minus officiis voluptate dignissimos sint aliquam eveniet tenetur dolor quae laudantium ea consectetur ullam ipsam dolore. Explicabo corrupti nobis tenetur neque sapiente labore magnam eos ex molestiae maiores quas cum tempore nesciunt quam libero harum, maxime voluptates saepe ullam? At qui quia voluptatem velit cum asperiores iure quam nam placeat sequi sapiente distinctio, tenetur nisi suscipit tempora aliquid consequuntur quos nemo beatae modi voluptas possimus? Cupiditate repellendus cum asperiores, quisquam quibusdam minus molestiae dolores et! Maxime corporis ducimus libero, .</p><p>nostrum repellat dolorem dolore sed ratione tenetur eius deleniti, sint dolores quibusdam! Molestias est, vero error tempora et reprehenderit, consequuntur consectetur delectus repudiandae nostrum adipisci asperiores distinctio magni perspiciatis mollitia provident earum natus omnis aut quis? Velit reprehenderit laudantium consectetur recusandae ad cupiditate harum? Iste fugiat consequuntur culpa qui expedita, illum ab eaque deleniti perspiciatis odio! Sequi quasi rerum saepe natus quam asperiores quos minus doloribus, unde, repellat, temporibus cum at .</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius, dolorem est totam adipisci laboriosam aut animi, facere ut porro minus iste magnam? Odit quidem ratione ad labore rem, eum laborum molestiae velit quod cupiditate sit minus officiis voluptate dignissimos sint aliquam eveniet tenetur dolor quae laudantium ea consectetur ullam ipsam dolore. Explicabo corrupti nobis tenetur neque sapiente labore magnam eos ex molestiae maiores quas cum tempore nesciunt quam libero harum, maxime voluptates saepe ullam? At qui quia voluptatem velit cum asperiores iure quam nam placeat sequi sapiente distinctio, tenetur nisi suscipit tempora aliquid consequuntur quos nemo beatae modi voluptas possimus? Cupiditate repellendus cum asperiores, quisquam quibusdam minus molestiae dolores et! Maxime corporis ducimus libero, .</p><p>nostrum repellat dolorem dolore sed ratione tenetur eius deleniti, sint dolores quibusdam! Molestias est, vero error tempora et reprehenderit, consequuntur consectetur delectus repudiandae nostrum adipisci asperiores distinctio magni perspiciatis mollitia provident earum natus omnis aut quis? Velit reprehenderit laudantium consectetur recusandae ad cupiditate harum? Iste fugiat consequuntur culpa qui expedita, illum ab eaque deleniti perspiciatis odio! Sequi quasi rerum saepe natus quam asperiores quos minus doloribus, unde, repellat, temporibus cum at .</p>',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus similique voluptatem eius, dolorem est totam adipisci laboriosam aut animi, facere ut porro minus iste magnam? Odit quidem ratione ad labore rem, eum laborum molestiae velit quod cupiditate sit minus officiis voluptate dignissimos sint aliquam eveniet tenetur dolor quae laudantium ea consectetur ullam ipsam dolore. Explicabo corrupti nobis tenetur neque sapiente labore magnam eos ex molestiae maiores quas cum tempore nesciunt quam libero harum, maxime voluptates saepe ullam? At qui quia voluptatem velit cum asperiores iure quam nam placeat sequi sapiente distinctio, tenetur nisi suscipit tempora aliquid consequuntur quos nemo beatae modi voluptas possimus? Cupiditate repellendus cum asperiores, quisquam quibusdam minus molestiae dolores et! Maxime corporis ducimus libero, .</p><p>nostrum repellat dolorem dolore sed ratione tenetur eius deleniti, sint dolores quibusdam! Molestias est, vero error tempora et reprehenderit, consequuntur consectetur delectus repudiandae nostrum adipisci asperiores distinctio magni perspiciatis mollitia provident earum natus omnis aut quis? Velit reprehenderit laudantium consectetur recusandae ad cupiditate harum? Iste fugiat consequuntur culpa qui expedita, illum ab eaque deleniti perspiciatis odio! Sequi quasi rerum saepe natus quam asperiores quos minus doloribus, unde, repellat, temporibus cum at .</p>',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
