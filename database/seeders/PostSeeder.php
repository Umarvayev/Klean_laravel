<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
           'user_id' => 1,
           'title' => 'nomi',
           'short_content' => 'qisqa kontent',
           'content' => 'misol kontent',
           'photo' =>  null,
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'nomi',
            'short_content' => 'qisqa kontent',
            'content' => 'misol kontent',
            'photo' =>  null,
         ]);
    }
}
