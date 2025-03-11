<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use  App\Models\product;
class PageController extends Controller
{
    public function getIndex(){
        $slide = slide::all();
        $new_product= Product::where('new',1)->paginate(4);
        $promotion_product= Product::where('promotion_price',">",0)->orderBy('promotion_price','desc')->paginate(4);
        return view('Page.Trangchu',compact('slide','new_product','promotion_product'));
    }
    public function getproduct(){
        $products = product::all();
        return view('Page.ShowProduct',compact('products'));
    }
}
