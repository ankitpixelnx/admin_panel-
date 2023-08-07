<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class Admincontroller extends Controller
{

    public function view_category()
    {
        $data = Category::all();

        return view('admin.view_category', compact('data'));
    }

    public function add_category(Request $request)
    {

        $data = new Category;

        $data->category_name = $request->category_name;

        $data->save();

        return redirect()->back()->with('message', 'category added successfully');
    }


    public function delete_category($id)
    {

        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function view_product()
    {
        $data = Category::all();

        return view('admin.product', compact('data'));
    }
    public function add_product(Request $request)

    {

        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $data->discount_price = $request->discount_price;
        $image = $request->image;

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $data->image = $imageName;


        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
          
        $data = Product::all();

        return view('admin.show_product',compact('data'));

    }
    public function delete_product($id){

         $data =Product::find($id);
         $data->delete();
         return redirect()->back();


    }

    public function update_product($id)
    {
        $data = Product::find($id);
        $category =Category::all();

           return view('admin.update_product',compact('data','category'));

    }
  
    public function update_details(Request $request,$id)
    {
     
        $data = Product::find($id);



        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $data->discount_price = $request->discount_price;
        $image = $request->image;
        if($image){

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $data->image = $imageName;
        }

        $data->save();

        return redirect()->back()->with('message','Product Update Successfully');
     

    }


}
