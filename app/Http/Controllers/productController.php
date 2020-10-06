<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller {
  
  public function showProduct($slug) {
    $data = Product::where('product_slug', $slug)->first();
    if(!$data) {
      abort(404);
    }
    return view('product', compact('data'));
  }
  
  public function showTable() {
    // $product = $product->all();
    $data = Product::paginate(5);
    if(!$data) {
      abort(404);
    }
    return view('table', compact('data'));
  }
  
  public function edit(Product $product) {
    return view('edit', compact('product'));
  }
  
  public function update(Request $request, Product $product) {
    $request->validate([
      // 'id' => $request->id,
      'product_title' => 'required',
      'product_slug'    => 'required',
      'product_image' => 'required',
      ]);
      $product->update($request->all());
      return redirect('table');
    }
    
    public function destroy(Product $product) {
      $product->delete();
      return redirect('table');
    }

    public function addTable() {
      return view ('add');
    }

    public function store(Request $request) {
      $product = new Product;
      $product->product_title = $request->product_title;
      $product->product_slug = \Str::slug($request->product_title);
      $product->product_image = $request->product_image;
      $product->product_price = $request->product_price;
      $product->save();

      return redirect('table');
    }
  }
