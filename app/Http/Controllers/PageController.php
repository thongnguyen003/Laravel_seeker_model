<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use  App\Models\product;
class PageController extends Controller
{
    public function getIndex(){
        $slide = slide::all();
        return view('Page.Trangchu',compact('slide'));
    }
    public function getproduct(){
        $products = product::all();
        return view('Page.ShowProduct',compact('products'));
    }
}
