<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function manageCategory(){
        return view('Admin.manageCategory',["cate" => Category::all()])
    ;
    }
public function showcat(){  
        return view("Admin.insertcategory",["cate" => Category::all()]);
    }
    public function catstore(Request $req){
    $req->validate([
    'cat_title'=>"required",
    'Parent_id'=>"required",
]);
$q=new Category();
$q->cat_title=$req->cat_title;
$q-> Parent_id=$req->Parent_id;
$q->save();
return view("Admin.manageCategory",["cate" => Category::all()]);
    }

}
