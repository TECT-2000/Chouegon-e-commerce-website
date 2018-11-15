<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        return view('Admin.Mail.mail');
    }

    public function create(){
        return view('Admin..Mail.mail_compose');
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
