<?php

namespace App\Http\Controllers;

use App\Http\Services\FancyClothesApi;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(public FancyClothesApi $clothesApi)
    {
        //
    }

    public function list()
    {
        $products = $this->clothesApi->getListProducts();

        return view('products.list', [
            'products' => $products,
        ]);
    }

    public function show(Request $request)
    {
        // TODO: Retrieve product information for PDP
    }
}
