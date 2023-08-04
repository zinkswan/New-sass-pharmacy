<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use App\Http\Resources\ProductsResource;
use App\Http\Resources\ProviderResource;
use App\Http\Resources\StatusesResource;
use App\Http\Resources\TypesResource;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Category;
use App\Models\Providers;
use App\Models\Types;
use App\Models\Status;

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
    public function fillType()
    {
        $type = Types::all();
        return TypesResource::collection($type);
    }
    public function fillStatus()
    {
        $status = Status::all();
        return StatusesResource::collection($status);

    }
    public function fillProduct()
    {
        $product = products::all();
        return ProductsResource::collection($product);

    }
    public function showProduct($id)
    {
        // $users = User::orderBy('id','desc')->where('id',$id);
        $product = products::where('id','=',$id)->get();

        return response()->json($product);
    }
    public function updateProduct(Request $request, $id)
    {
        /*$request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'email'=>'required',
            'password'=>'required',
            'id'=>'required'

        ]);*/

        products::where('id','=',$id)->update([
            'productName' => $request->input('productName'),
            'sku' => $request->input('sku'),
            'categoryId' => $request->input('categoryId'),
            'typeId' => $request->input('typeId'),
            'providerId' => $request->input('providerId'),
            'status' => $request->input('status'),
            'quantity' => $request->input('quantity'),
            'minQuantity' => $request->input('minQuantity'),
            'sellingPrice' => $request->input('sellingPrice'),
            'buyingPrice' => $request->input('buyingPrice'),
            'description' => $request->input('description'),

    ]);

        return response()->json(['success' => 'Product has been updated successfully.']);
    }
    public function save(Request $request)
    {
        $data = $request->all();
        products::create($data);
        return response()->json(['success' => 'Product has been created successfully.']);
    }
    
}
;