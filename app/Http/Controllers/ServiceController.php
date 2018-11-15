<?php

namespace App\Http\Controllers;

use App\Service;
use App\Sous_categorie;
use Request;

class ServiceController extends Controller
{
    public function index(){
        $services=Service::get();
        $sous_categories=Sous_categorie::pluck('nom',"id");
        return view('Admin.Services.service',compact('sous_categories','services'));
    }

    public function create(){
        $services=Service::get();
        $sous_categories=Sous_categorie::pluck('nom',"id");
        return view('Admin.Services.service',compact('sous_categories','services'));
    }
    public function store(Request $request){
        $service=Service::create($request::all());
        return redirect(route('service.create'));
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
