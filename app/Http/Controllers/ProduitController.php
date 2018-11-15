<?php

namespace App\Http\Controllers;

use App\Couleur;
use App\Produit;
use App\Rayon;
use App\Sous_categorie;
use App\Type_rayon;
use Illuminate\Support\Facades\Storage;
use Request;

class ProduitController extends Controller
{
    public function index(){
        $produits=Produit::get();
        return view('Admin.Produits.produit',compact('produits'));
    }

    public function create(){
        $types=Type_rayon::pluck('nom','id');
        $sous_categories=Sous_categorie::pluck('nom','id');
        $rayons=Rayon::pluck('nom','id');
        $couleurs=Couleur::pluck('nom','id');
        return view('Admin.Produits.produit_create',compact('types','sous_categories','rayons','couleurs'));
    }
    public function store(Request $request){

        $file=$request::file('image');
        $file->storeAs('public',$file->getClientOriginalName());
        $produit=Produit::create($request::all());
        $produit->Image=$file->getClientOriginalName();
        $produit->save();
        return redirect(route('produit.create'));
    }
    public function show($id){
        $produit=Produit::find($id);
        return view('Admin.Produits.show',compact('produit'));
    }

    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}
