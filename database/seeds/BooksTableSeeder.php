<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $book = new Book();
            $book->nameBook = "Darknest season".str_random(3);
            $book->information = str_random(20);
            $book->author = "Yamasite".str_random(2);
            $book->datePublish=mt_rand(2000,2019)."/".mt_rand(1,12)."/".mt_rand(1,30);
            $book->kind_id=mt_rand(1,8);
            $book->save();
        }
    }
}
