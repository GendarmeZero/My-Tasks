<?php

namespace App\Http\Controllers;
use App\Models\Product;

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

        return view('Larastore.data.pages.create');

    }
    public function store(){
      $product_name = request('product_name');
      $product_description = request('product_description');
      $product_name = request('product_description');

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
