<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name' => 'Abdi Putra Zulkarnain',
            'username' => 'mhdabdikc',
            'email' => 'mhdabdikc123@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'DevOps',
            'slug' => 'devOps'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Ini adalah cuplikan dari judul pertama',
        //     'body' => 'Ini adalah isi lengkap dari judul pertama. Ini adalah contoh teks yang digunakan untuk mengisi konten dari judul pertama.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Ini adalah cuplikan dari judul kedua',
        //     'body' => 'Ini adalah isi lengkap dari judul kedua. Ini adalah contoh teks yang digunakan untuk mengisi konten dari judul kedua.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
    }
}
