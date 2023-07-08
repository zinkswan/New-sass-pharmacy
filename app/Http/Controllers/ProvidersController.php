<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    //

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request -> validate([
            'code'  => 'required',
            'name'  => 'required',
            'email' =>  'required',
            'phone'  => 'required',
            'adress'  => 'required'
        ]);

        $providers = new Providers;
        $providers->code = $request->code;
        $providers -> name = $request -> name;
        $providers -> email = $request -> email;
        $providers -> phone = $request -> phone;
        $providers -> adress = $request -> adress;

        $providers -> save();
        return redirect()->route('');
    }
}
