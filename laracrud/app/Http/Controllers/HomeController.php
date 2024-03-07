<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){

        return view('home');

    }

    //Add product
    public function add_product(Request $request){

    $request->validate([

        'title'=>'required|unique:products',
        'description'=>'required|max:100',
        'image'=>'required|image|mimes:jpg,jpeg,svg,gif,png'

    ]);

        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image = $imagename;

        }

        $data->save();
        return redirect()->back();

    }

    //Show product
    public function show_product(){

        $data = Product::all();

        return view('product',compact('data'));

    }

    //Delete product
    public function delete_product($id){

    $data = Product::find($id);
    $data->delete();

    return redirect()->back();

    }

    //Update page product
    public function update_product($id){

    $product = Product::find($id);

    return view('product_update',compact('product'));

    }

    //Update product
    public function edit_product(Request  $request, $id){

        $data = Product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
   
         $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image = $imagename;

        }

        $data->save();
        return redirect()->back();
    }

}
