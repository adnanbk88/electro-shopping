<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.index');
    } 
    public function create(Request $request){
      $request -> validate([
          'image'=>'required' ,
          'description'=>'required' 
      ]);
      $product = new Product();
      $product->description=$request->description;
      // Handle File Upload
      if ($request->hasFile('image')) {
        $fileName = "item_" . time().'.'.$request->image->extension();  
   
        $path = $request->file('image')->storeAs(
          'public/uploads', $fileName
      );
      $product->image = $fileName;
    }
      $product->save();
      return redirect()->back()->with('success', "Products saved !!!");
    } 

    public function delete()
    {
      $products = Product::all();
      return view('admin.delete', compact("products"));
    }
    public function destroy($id)
    {
      $product = Product::find($id);
      Storage::delete("public/uploads/$product->image");
      $product->delete();
      return redirect()->back();
    }
    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $request -> validate([
        'description'=>'required' 
      ]);
      $product->description = $request->description;
      $product->save();
      return redirect("/admin/delete");
    }
}
