<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Sous_categorie;
use Request;

class Sous_CategorieController extends Controller
{
    public function index(){

        $categories=Categorie::pluck('nom','id');
        $sous_categories=Sous_categorie::get();
        return view('Admin.Sous_categorie.sous_categorie',compact('categories','sous_categories'));
    }

    public function create(){

        $categories=Categorie::pluck('nom','id');
        $sous_categories=Sous_categorie::get();
        return view('Admin.Sous_categorie.sous_categorie',compact('categories','sous_categories'));
    }
    public function store(Request $request){
        $categorie=Sous_categorie::create($request::all());
        return redirect(route('sous_categorie.create'));
    }
    public function show($id){

    }

    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}
