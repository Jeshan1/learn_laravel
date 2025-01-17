<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'page' => 'sometimes|integer|min:1',
            'category' => 'sometimes|string|max:50',
            'price_min' => 'sometimes|numeric|min:2',
            'price_max' => 'sometimes|numeric|min:3'
        ]);

        $page = $request->query('page',1);
        $category = $request->query('category','all');
        $minprice = $request->query('price_min',10);
        $maxprice = $request->query('price_max',1000);

       //mock datas
       $products = [
                ['id' => 1, 'name' => 'Product A', 'category' => 'Electronics', 'price' => 200],
                ['id' => 2, 'name' => 'Product B', 'category' => 'Books', 'price' => 50]
       ];

       return response()->json([
            'page'=>$page,
            'category'=>$category,
            'price_min'=>$minprice,
            'price_max'=>$maxprice,
            'products' => $products
       ]);

    }
}
