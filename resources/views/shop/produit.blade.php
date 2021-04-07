@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{route('voir_produits_par_cat',['id'=>$produit->category->parent->id])}}">{{$produit->category->parent->nom}}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produits_par_cat',['id'=>$produit->category->id])}}">{{$produit->category->nom}}</a></li>
        </ol>
    </nav>
<main role="main">
<div class="container">


    <div class="row justify-content-between">

        <div class="col-6">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">

            </div>
        </div>
        <div class="col-6">
            {{--{{dd($produit)}}--}}
            <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
            <h5>{{ $produit->prixTTC() }} FCFA</h5>
            <p class="lead text-muted">{{$produit->description}}</p>
            @foreach($produit->tags as $tag)
            <span class="badge badge-info">
            <a class="text-white" href="{{route('voir_produits_par_tag',['id'=>$tag->id])}}">{{$tag->nom}}</a>
            </span>
            @endforeach
            <hr>
            <form action="{{route('cart_add',['id'=>$produit->id])}}" method="POST" id="panier_add">
            @csrf
            <label for="size">Choisissez votre taille</label>
            <select name="size" id="size" class="form-control">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select>
            <label for="qty">Quantité</label>
            <input class="form-control" name="qty" id="number" value="1">
            </form>

            <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart">
            </i> Ajouter au Panier</button>
        </div>
    </div>
</div>


<div class="album py-5 bg-light">
<div class="container">
    <div class="row">
        <h3>Vous aimerez aussi :</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img src="{{asset('produits/images.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img src="{{ asset('produits/téléchargement (3).jpg') }}" class="card-img-top img-fluid" alt="Responsive image">

                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img src="{{ asset('produits/images.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">

                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</main>
@endsection