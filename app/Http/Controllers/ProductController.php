<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use App\Http\Resources\ProviderResource;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Category;
use App\Models\Providers;

class ProductController extends Controller
{
    //
    public function fillCategory()
    {
        $category = Category::all();
        return CategoriesResource::collection($category);
        // $users = Products::orderBy('id','desc')->paginate(5);
        //return view('products.index', [CategoriesResource::collection($category)]);
    }
    public function fillProvider()
    {
        $provider = Providers::all();
        return ProviderResource::collection($provider);
    }
    public function save(Request $request)
    {
        $data = $request->all();
        $response = products::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $response

        ], 200);
    }
}
;