<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Product::all());
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getProducts()
    {
        $posts =[];
        $image = 'https://drive.google.com/uc?export=view&id=1MAlpeoscV5k85d5ft-kgfNBqHkc3GdiG';
        $products = Product::all();
        foreach ($products as $product) {
            $posts[] = [
                'id' => $product->getAttributeValue('id'),
                'url_key' => $product->getAttributeValue('url_key'),
                'image' => $image,
                'title' => $product->getAttributeValue('name'),
                'color' => $product->getAttributeValue('color_index'),
                'price' => number_format($product->getAttributeValue('price'),2),
                'category' => ProductCategory::where('id', '=', $product->getAttributeValue('product_category'))
            ];
        }
        
        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($urlKey)
    {   
        $product = Product::query();
        $product = $product->where('url_key', '=', $urlKey);
        $product = $product->join('product_applications', 'products.id', '=', 'product_applications.product_id');
        $product = $product->get()->first();
    
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
