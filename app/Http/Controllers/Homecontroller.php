<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;



class Homecontroller extends Controller
{
    public function index()
    {
    
      $data =Product::all();


        return view('home.userpage',compact('data'));
    
    
    }
    public function redirect(){ 

       
    $usertypes = Auth::user()->usertype;
   
   if($usertypes == '1')
   {

    return view('admin.home');
   
}else
{
    return view('home.userpage');
  
}

}
    

}
