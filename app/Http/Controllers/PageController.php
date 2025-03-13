<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use  App\Models\product;
use  App\Models\type_product;
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
    public function getTypeProduct($type_id){
        $slide = slide::all();
        $exist = false;
        $type_products = type_product::all();
        foreach($type_products as $type){
            if($type->id==$type_id){
                $exist=true;
            }
        }
        if($exist){
            $new_product= Product::where('new',1)->where('id_type',$type_id)->paginate(4);
            $promotion_product= Product::where('promotion_price',">",0)->where('id_type',$type_id)->orderBy('promotion_price','desc')->paginate(4);
            return view('Page.TypecalProduct',compact('slide','type_products','new_product','promotion_product'));
        }
    }
}
