<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index () {
    	$products = Product::get();

//    	dd($products->toArray());

    	return view("pages.products.index", compact("products"));
    }



    public function show ($id) {
//        $product = Product::where("id", "=", $id)->get()[0];
//        $product = Product::where("id", "=", $id)->first();
//        $product = Product::where("id", $id)->first();
        $product = Product::find($id);

	




//        dd($product->toArray());
        $product->increment("views");
        $product->save();

        return view("pages.products.show", compact("product"));
    }
	public function edit($id){
		$product = Product::find($id);
       // dd($product->toArray());
		return view("pages.products.edit", compact("product"));
	}
    public function update (Request $request, $id) {
        $product = Product::find($id);

//        $product->name = $request->name;
//        $product->count = $request->count;
//        $product->price = $request->price;
//        $product->description = $request->description;
//
//        $product->save();
        $product->update([
            "name"=> $request->name,
            "count"=> $request->count,
            "price"=> $request->price,
            "description"=> $request->description,
        ]);
        return redirect("/products");

    }
    public function delete($id) {
        $product = Product::find($id);

        Product::destroy($id);

        return redirect("/products");
    }

}
