<?php

namespace App\Http\Controllers;

use App\Tache;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    public function index(){
        $taches=Tache::get();
        return view("Admin.Calendrier.tache",compact('taches'));
    }

    public function create(){
        $taches=Tache::get();
        return view("Admin.Calendrier.tache",compact('taches'));
    }
    public function store(Request $request){

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
