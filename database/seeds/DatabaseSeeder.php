
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "トマト",
            "http://placehold.it/200x200&text=tomato",
            "みずみずしいトマトです。",
            "200"
        ]);
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "レタス",
            "http://placehold.it/200x200&text=lettuce",
            "しゃきしゃきしたレタスです。",
            "150"
        ]);
    }
}