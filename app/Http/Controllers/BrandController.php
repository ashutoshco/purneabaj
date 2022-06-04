<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;



class BrandController extends Controller
{
    public function brandindex(){
        return view('Admin.manageBrand',[
            'brand'=>Brand::all(),
            ]
    
    );
    
    }
    Public function insertbrand(){
        return view('Admin.insertBrand');
    }
    public function store(Request $req){
        $req->validate([
           'brands_title'=>"required",

        ]);
        $p=new Brand();
        $p->brands_title=$req->brands_title;
        $p->save();
        return  redirect()->route('brandindex');

    }

}
