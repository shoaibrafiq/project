<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products=Product::all();
return view('admin.product.index',compact('products'));

    }// fetching all the products from the database

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$categories=Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }// The pluck method retrieves all of the values for a given key i have also specified resulting collection to be keyed

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$formInput=$request->except('image');

//Validation for image Uploading and  name, size, price which needs to be filled in

$this->validate($request,[
'name'=>'required',
'size'=>'required',
'price'=>'required',
'image'=>'image|mimes:jpg,jpeg,png,gif|max:10000' //here only certain types can be uploaded and size cannot be bigger than 10000kb

]);

//Image Uploading
$image=$request->image;
if($image){
$imageName=$image->getClientOriginalName();
$image->move('images',$imageName);
$formInput['image']=$imageName;

}


        Product::create($formInput);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrFail($id);
      $categories=Category::pluck('name','id');
      return view('admin.product.edit', compact('categories','product'));

    }// this function selects the product and category and returns you back to the page

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::findOrFail($id);



  $input = $request->all();

  $product->fill($input)->save();

return back();
    } // this function updates the products when edited and saves the changes then returns you back to the page

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);
             return back();
    } // this function deletes the products and returns you back to the page
}
