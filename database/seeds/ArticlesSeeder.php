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
        DB::insert("INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?,?,?)",[
            'DB vers1 name',
            'DB vers1 text',
            'DB vers1 img',
        ]);

        DB::table('articles')->insert([
           'name'=>str_random(10),
           'text'=>str_random(10),
           'img'=>str_random(10),
        ]);
        Article::create([
            'name'=>str_random(10).'model',
            'text'=>str_random(10).'model',
            'img'=>str_random(10).'model',
        ]);

    }
}
