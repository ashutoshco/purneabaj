<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\{Category,Product};

class PublicController extends Controller
{
public function home(){
return view("public.home",[
    'r'=> Category::all(),
    'it'=> Product::all(),
]
);
}
public function viewpage($id){
    return view('public.viewproduct',[
    'P'=> Product::find($id),

    ] 
        );


}






// 



public function cart(){
    return view("public.cart");
                    }
}



