<?php

namespace App\Http\Controllers;

use App\Type_rayon;
use Request;

class Type_RayonController extends Controller
{
    public function index(){
        return view('Admin.Rayons.type_rayon');
    }

    public function create(){
        return view('Admin.Rayons.type_rayon');
    }
    public function store(Request $request){
        $type=Type_rayon::create($request::all());
        return redirect(route('type_rayon.create'));
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
