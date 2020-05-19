<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert(
            [
                [
                    'title' => 'タイトル1'
                    ,'body'=>'内容'
                ],
                [
                    'title' => 'タイトル2'
                    ,'body'=>'内容2'
                ],
                [
                    'title' => 'タイトル3'
                    ,'body'=>'内容3'
                ],
                
            ]
            );
    }
}
