<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogPost')->insert([
            'title' => str_random(100),
            'content_of_post' => str_random(500),
        ]);
    }
}
