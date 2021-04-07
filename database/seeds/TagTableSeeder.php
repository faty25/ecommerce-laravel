<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new \App\Tag();
        $tag->nom = "#humour";
        $tag->save();

        $tag2 = new \App\Tag();
        $tag2->nom = "#fun";
        $tag2->save();

        $tag3 = new \App\Tag();
        $tag3->nom = "#Rouge";
        $tag3->save();
    }
}
