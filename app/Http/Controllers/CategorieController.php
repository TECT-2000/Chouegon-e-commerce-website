<?php

namespace App\Http\Controllers;

use App\Categorie;
use Request;

class CategorieController extends Controller
{
    public function index(){
        $categories=Categorie::get();
        return view('Admin.Categories.categorie',compact('categories'));
    }

    public function create(){
        $categories=Categorie::get();
        return view('Admin.Categories.categorie',compact('categories'));
    }
    public function store(Request $request){
    $categorie=Categorie::create($request::all());
    return redirect(route('categorie.create'));

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
