<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?,?,?)',
            [
                'Blog Post',
                '<p>Hello WOrld</p>',
                'pic1.jpg'
            ]);
        //2
        DB::table('articles')->insert([
            'name' => str_random(10),
            'text' => str_random(10).'@gmail.com',
            'img' => str_random(10),
        ]);
        //3
        Article::create([
            'name'=>'Simple POST',
            'text'=>'Hello World!',
            'img'=>'pic3.jpg',
        ]);
    }
}
