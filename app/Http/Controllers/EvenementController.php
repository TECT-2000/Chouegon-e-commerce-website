<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        $evenements=Evenement::get();
        return view('Admin.Evenements.index',compact('evenements'));
    }
    public function create(){

    }
    public function store(){

    }
    public function show(){

    }
    public function destroy(){

    }
}
