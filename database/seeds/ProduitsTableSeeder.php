<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film les Gonnies";
        $produit->photo_principale = "GUEST_0a701add-9a3c-4f5f-8e32-31c54d3a4a8b.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 33;
        $produit->description = "T-Shirt du film les Gonnies stars";
        $produit->photo_principale = "images.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 43;
        $produit->description = "T-Shirt du film les Gonnies ne disent jamais";
        $produit->photo_principale = "les-goonies-ne-disent-jamais-mourir-t-shirt-a-noeud-femme.jpg";
        $produit->category_id = 5;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 55;
        $produit->description = "T-Shirt du film les Gonnies black";
        $produit->photo_principale = "téléchargement (2).jpg";
        $produit->category_id = 4;
        $produit->save();


        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 62;
        $produit->description = "T-Shirt du film les Gonnies star";
        $produit->photo_principale = "téléchargement (3).jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 71;
        $produit->description = "T-Shirt du film les Gonnies télechargement";
        $produit->photo_principale = "téléchargement.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 86;
        $produit->description = "T-Shirt du film les Gonnies never say";
        $produit->photo_principale = "the-goonies-t-shirt-never-say-die-chunk-men-s-fash.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 90;
        $produit->description = "T-Shirt du film les Gonnies-vanille";
        $produit->photo_principale = "tshirt.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "T-Shirt Gonnies";
        $produit->prix_ht = 100;
        $produit->description = "T-Shirt du film les Gonnies-choco";
        $produit->photo_principale = "t-shirt-goonies-choco-truffle-shuffle.jpg";
        $produit->category_id = 2;
        $produit->save();

    }
}
