<?php

use Illuminate\Database\Seeder;

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
        $inputs = [
            [
                'author' => 'Dara sok',
                'title' => 'Learning Laravel',
                'content' => ' This is my first titme to learning coding on web application. and we use laravel framework',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'author' => 'Somnang sok',
                'title' => 'Learning Laravel',
                'content' => ' This is my first titme to learning coding on web application. and we use laravel framework',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'author' => 'Tida sok',
                'title' => 'Learning Laravel',
                'content' => ' This is my first titme to learning coding on web application. and we use laravel framework',
                'created_at' => \Carbon\Carbon::now()
            ]
        ];

        foreach ($inputs as $input) {
//            \Illuminate\Support\Facades\DB::table('articles')->insert($input);
            \App\Models\Article::create($input);
        }
    }
}
