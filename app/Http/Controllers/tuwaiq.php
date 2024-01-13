<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class tuwaiq extends Controller
{

    public function getRamia(){
        return view('ramia');
    }

    public function getProducts() {
        $phones = [
            [
                'id' => 1,
                'name' => 'iPhone 12',
                'model' => '12',
                'price' => 999.99,
            ],
            [
                'id' => 2,
                'name' => 'Samsung Galaxy S21',
                'model' => 'S21',
                'price' => 799.99,
            ],
            [
                'id' => 3,
                'name' => 'Google Pixel 5',
                'model' => 'Pixel 5',
                'price' => 699.99,
            ],
            [
                'id' => 4,
                'name' => 'OnePlus 9',
                'model' => '9',
                'price' => 899.99,
            ],
            [
                'id' => 5,
                'name' => 'Huawei P40',
                'model' => 'P40',
                'price' => 599.99,
            ],
            [
                'id' => 6,
                'name' => 'Xiaomi Mi 11',
                'model' => 'Mi 11',
                'price' => 749.99,
            ],
            [
                'id' => 7,
                'name' => 'Sony Xperia 5 II',
                'model' => 'Xperia 5 II',
                'price' => 899.99,
            ],
            [
                'id' => 8,
                'name' => 'LG Velvet',
                'model' => 'Velvet',
                'price' => 649.99,
            ],
            [
                'id' => 9,
                'name' => 'Motorola Moto G Power',
                'model' => 'Moto G Power',
                'price' => 249.99,
            ],
            [
                'id' => 10,
                'name' => 'Nokia 8.3',
                'model' => '8.3',
                'price' => 699.99,
            ],
        ];
        
      return view('productsList',['p'=>$phones]);
    }

    public function vat($total){
        return $total * 0.15;
    }

    public function printValue(Request $request){
        dd($request->p);

    }
    public function getResult($degree){
        $result = $degree >= 50 ? 'pass' : 'fail';
        return($result);
    }

    public function saveProduct(Request $request){
        if(!Product::where('product_name',$request->product_name)->exists()){
        $product = Product::Create([
            'product_name'=>$request->product_name,
            'price'=>$request->price,

        ]);
        $product->save();
    }
    $getProduct = Product::ALL();
    
    return view('create-product',['products'=>$getProduct]);
    }
}
