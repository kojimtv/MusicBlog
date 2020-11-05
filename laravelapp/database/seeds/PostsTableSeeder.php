<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'test1',
            'artist' => 'koji',
            'genre' => 'Pops',
            'year' => '1996',
            'content' => 'これはテストです。',
            'link' => 'test.com',
            'disp_status' => true,
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'test2',
            'artist' => 'atsushi',
            'genre' => 'Rock',
            'year' => '1993',
            'content' => 'これもテストです。',
            'link' => 'test.com',
            'disp_status' => true,
        ];
        DB::table('posts')->insert($param);

        $param = [
            'title' => 'test3',
            'artist' => 'moeka',
            'genre' => 'R&B',
            'year' => '2002',
            'content' => 'これも、テストです。',
            'link' => 'test.com',
            'disp_status' => true,
        ];
        DB::table('posts')->insert($param);
    }
}
