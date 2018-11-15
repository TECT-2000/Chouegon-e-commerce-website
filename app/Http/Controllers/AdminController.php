<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $produits=Produit::get();
        return view("Admin.index",compact("produits"));
    }

}
