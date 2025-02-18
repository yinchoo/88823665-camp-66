<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductList;

class ProductController extends Controller
{
    //
    public function index() {
        $products = ProductList::with('category', 'user')->get(); // ดึงข้อมูลทั้งหมด
        return view('product', compact('products')); // ส่งข้อมูลไปยัง View
    }
    
    function add_product(Request $req){
        // dd($req->all()); 
        $category = new Category();
        $category -> name = $req -> category_name;
        $category -> save();

        foreach($req -> product_name as $value){
            $product = new ProductList;
            $product -> name = $value;
            $product -> category_id = $category -> id;
            $product -> user_id = session('user') -> id;
            $product -> save();
        }
        return redirect('/product');
    }
}
