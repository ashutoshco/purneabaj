<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\{Brand,Category};

class ProductController extends Controller
{
    public function home(){
        return view("Admin.manageProduct");

    }
   
     public function viewinsert(){
         $brand['brands']=Brand::all();
         $data['categorys']=Category::all();
        return view("Admin.insertProduct",$data,$brand);

    }
public function storepro(Request $req){
    $req->validate([
        'title'=>'required',
        'category_id'=>'required',
        'brand_id'=>'required',
        'description'=>'required',
        'price'=>'required',
        'discount_price'=>'required',
        'stock'=>'required',
]);
    $file1= $req->file('image')->getClientOriginalName();
    $req->image->move(public_path("image"),$file1);

    $P=new Product();
    $P->title=$req->title;
    $P->category_id=$req->category_id;
    $P->brand_id=$req->brand_id;
    $P->description=$req->description;
    $P->price=$req->price;
    $P->discount_price=$req->discount_price;
    $P->stock=$req->stock;
    $P->image=$file1;
    $P->save();
    // return $p;

    return redirect()->route("showpage");

}
}
