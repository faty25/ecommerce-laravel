<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Récuperer la catégorie parent d'une catégorie
    public function parent() {
        return $this->belongsTo('App\Category','parent_id');
    }

    //Récupérer les catégories enfants d'une catégorie
    public function childrens() {
        return $this->hasMany('App\Category','parent_id');
    }

    // Récupérer les produits de la catégorie >> OneToMany
    public function produitsParent() {
        return $this->hasMany('App\Produit');
    }

    // Récuperer des produits situés dans une catégorie enfant au travers d'une catégorie parent
    public function produitsChild() {
        return $this->hasManyThrough('App\Produit','App\Category','parent_id','category_id');
    }

    public function produits() {
        $produits = $this->produitsParent()->with('category')->get()->merge($this->produitsChild()->with('category')->get());
        return $produits;
    }
}
