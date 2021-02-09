<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('products.create',[
            'categories' => $categories
        ]);
    }

    public function index(){
        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);
      
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $filenameWithExt = $file->getClientOriginalName();

                  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                  $extension = $file->getClientOriginalExtension();

                  $filenameToStore = $filename.'_'.time().'.'.$extension;

                  $file->move(public_path().'/uploads/', $filenameToStore); 

                  $imgData[] = $filenameToStore;  
              } 
       
              $fileModal = new Product();
              $fileModal->title = $request->title;
              $fileModal->description = $request->description;
            //   $fileModal->price = $request->price;
            //   $fileModal->dimensions = $request->dimensions;
            //   $fileModal->weight = $request->weight;
              $fileModal->color = $request->color;
              $fileModal->category_id = $request->category_id;
              $fileModal->filename = serialize($imgData);
             
              $fileModal->save();
      
             return redirect('/product');
          }
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }

    public function edit($id){
        $categories = Category::all();
        $product = Product::find($id);
        // $value = json_decode($product->filename, true);
        // $value1 = $value->toArray();
        return view('products.edit',[
            'product' => $product,
            'categories' => $categories
        ]); 
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'title' => 'required',
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);
      
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $filenameWithExt = $file->getClientOriginalName();

                  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                  $extension = $file->getClientOriginalExtension();

                  $filenameToStore = $filename.'_'.time().'.'.$extension;

                  $file->move(public_path().'/uploads/', $filenameToStore); 

                  $imgData[] = $filenameToStore;  
              }
       
              $product->title = $request->title;
              $product->description = $request->description;
            //   $product->price = $request->price;
            //   $product->dimensions = $request->dimensions;
            //   $product->weight = $request->weight;
              $product->color = $request->color;
              $product->category_id = $request->category_id;
              $product->filename = serialize($imgData);
             
              $product->save();
      
             return redirect('/product');
          }
    }
    public function show(Product $product){
        // $productImages = unserialize($product->filename);
        return view('products.show',[
            'product' => $product
            // 'productImages' => $productImages
        ]);
    }

    public function returnSingle(Product $product){
        return view('single-product',[
            'product' => $product
        ]);
    }

    public function displayAllProducts(){
        // $products = Product::all();
        $categories = Category::all();
        return view('show-product',[
            // 'products' => $products,
            'categories' => $categories
        ]);
    }

    public function searchProduct(Request $request){
        $search = request('search');
        $products = Product::where('title','LIKE', '%'.$search.'%')->get();
        return view('search',[
            'search' => $search,
            'products' => $products
        ]);
    }
}       
