<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //$category = new \App\Category();
        //$category->nom = "Films";
        //$category->is_online = 1;
        //$category->save();

        //$category2 = new \App\Category();
        //$category2->nom = "Séries TV";
        //$category2->is_online = 1;
        //$category2->save();

        //$category3 = new \App\Category();
        //$category3->nom = "Musique";
        //$category3->is_online = 1;
        //$category3->save();

        //$category4 = new \App\Category();
        //$category4->nom = "Jeux-Vidéos";
        //$category4->is_online = 1;
        //$category4->save();

        //$category5 = new \App\Category();
        //$category5->nom = "Sport";
        //$category5->is_online = 1;
        //$category5->save();

        $category5 = new \App\Category();
        $category5->nom = "Les goonies";
        $category5->is_online = 1;
        $category5->parent_id = 1;
        $category5->save();

        $category6 = new \App\Category();
        $category6->nom = "Star Wars";
        $category6->is_online = 1;
        $category6->parent_id = 1;
        $category6->save();

        $category7 = new \App\Category();
        $category7->nom = "Star Trek";
        $category7->is_online = 1;
        $category7->parent_id = 1;
        $category7->save();

        $category8 = new \App\Category();
        $category8->nom = "Super Man";
        $category8->is_online = 1;
        $category8->parent_id = 1;
        $category8->save();

        $category9 = new \App\Category();
        $category9->nom = "Tomb Raider";
        $category9->is_online = 1;
        $category9->parent_id = 4;
        $category9->save();

        $category10 = new \App\Category();
        $category10->nom = "GTA";
        $category10->is_online = 1;
        $category10->parent_id = 4;
        $category10->save();

    }
}
