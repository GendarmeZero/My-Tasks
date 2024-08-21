<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('Larastore.index', ['products' => $products]);

    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('Larastore.data.pages.show');
    }
    public function create(){



        $users = User::all();

        return view('Larastore.data.pages.create' , ['users' => $users]);

    }
    public function store(){
      $product_name = request('product_name');
      $product_description = request('product_description');
      $product_price = request('product_price');

      product::create([
          'product_name' => $product_name,
          'product_description' => $product_description,
          'product_price' => $product_price
      ]);

        return redirect('/index');

    }
    public function all(){
        $products = Product::all();
        return view('Larastore.data.pages.all', ['products' => $products]);

    }
    public function destroy($id)
    {
        $post = product::findOrFail($id);
        $post->delete();

        return to_route('index')->with('success', 'Post deleted successfully.');
    }





}
