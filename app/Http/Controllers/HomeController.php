<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(8);
        $latestProducts = Product::orderBy('updated_at', 'desc')->take(20)->get();
        return view('index',[
            'products' => $products,
            'latestProducts' => $latestProducts
        ]);
    }
}
