<?php

namespace App\Http\Controllers;

use App\Rayon;
use App\Type_rayon;
use Request;

class RayonController extends Controller
{
    public function index(){
        $rayons=Rayon::get();
        $types=Type_rayon::pluck('nom','id');
        return view('Admin.Rayons.rayon',compact('types','rayons'));
    }

    public function create(){
        $rayons=Rayon::get();
        $types=Type_rayon::pluck('nom','id');
        return view('Admin.Rayons.rayon',compact('types','rayons'));
    }
    public function store(Request $request){

        $rayon=Rayon::create($request::all());
        return redirect(route('rayon.create'));
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
