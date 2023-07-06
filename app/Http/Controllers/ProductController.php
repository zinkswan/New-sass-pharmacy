<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductController extends Controller
{
    //
    public function index()
    {
       // $users = Products::orderBy('id','desc')->paginate(5);
        return view('Products.index',  );
    }
}
