<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    public function createPrducts()
    {
        return view('products.createProducts');
    }
    public function storePrducts(Request $request)
    {
        $rules = [
            'productName' => 'required|min:5',
            'productSku' => 'required|min:3',
            'productPrice' => 'required|numeric',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()
                ->route('products.create')
                ->withInput()
                ->withErrors($validator);
        }
    }
    public function showPrducts()
    {
        return view('products');
    }
    public function updatePrducts()
    {
        return view('products');
    }
    public function deletePrducts()
    {
        return view('products');
    }
}
