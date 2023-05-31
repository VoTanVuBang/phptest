<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Product::all();
        return view('admincp.product.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $product = new Product();
        $product->title = $data['title'];
        $product->code =$data['code'] ;
        $product->price =$data['price'] ;
        
        //Thêm hình ảnh
        $get_image = $request->file('image');
        $path = 'uploads/product/';
        if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image=  current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $product->image = $new_image;
        }
        
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admincp.product.form',compact('product'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->title = $data['title'];
        $product->code =$data['code'] ;
        $product->price =$data['price'] ;
        
        //Thêm hình ảnh
        $get_image = $request->file('image');
        $path = 'uploads/product/';
        if($get_image){
            if(file_exists('uploads/product/'.$product->image)){
                unlink('uploads/product/'.$product->image);
            }
        $get_name_image = $get_image->getClientOriginalName();
        $name_image=  current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $product->image = $new_image;
        }
        
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        // Xóa ảnh
        if(file_exists('uploads/product/'.$product->image)){
            unlink('uploads/product/'.$product->image);
        }
        
        $product->delete();

        return redirect()->back()->with('status','Xóa thành công');
    }
}