<?php

use Illuminate\Database\Seeder;

class BlogTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'title' => str_random(100),
            'content_of_post' => str_random(),
        ]);
    }
}
