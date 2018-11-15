<?php

namespace App\Http\Controllers;

use App\Couleur;
use Request;

class CouleurController extends Controller
{
    public function index(){
        $couleurs=Couleur::get();
        return view('Admin.Couleurs.couleur',compact('couleurs'));
    }

    public function create(){
        $couleurs=Couleur::get();
        return view('Admin.Couleurs.couleur',compact('couleurs'));
    }
    public function store(Request $request){
        $couleur=Couleur::create($request::all());
        return redirect(route('couleur.create'));

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
