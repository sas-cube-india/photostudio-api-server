<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(["product"=>product::get()->groupBy('product_orientation')],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $products=new product;
        $products->size=$request->size;
        $products->product_orientation=$request->product_orientation;
        $products->thermal_sheet=$request->thermal_sheet;
        $products->white_sheet=$request->white_sheet;
        $products->black_sheet=$request->black_sheet;
        $products->image_wrap=$request->image_wrap;
        $products->leather=$request->leather;
        $products->photo=$request->photo;
        $products->acrylic_cameo=$request->acrylic_cameo;
        $products->canvas=$request->canvas;
        $products->leather_box=$request->leather_box;
        $products->photo_box=$request->photo_box;
        $products->linen_box=$request->linen_box;
        $products->leather_sleeve=$request->leather_sleeve;
        $products->save();

        return response(["msg"=>""],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product,$id)
    {
        //
        $product->find($id)->update([
            'size'=>$request->size,
            'product_orientation'=>$request->product_orientation,
            'thermal_sheet'=>$request->thermal_sheet,
            'white_sheet'=>$request->white_sheet,
            'black_sheet'=>$request->black_sheet,
            'image_wrap'=>$request->image_wrap,
            'leather'=>$request->leather,
            'photo'=>$request->photo,
            'acrylic_cameo'=>$request->acrylic_cameo,
            'canvas'=>$request->canvas,
            'leather_box'=>$request->leather_box,
            'photo_box'=>$request->photo_box,
            'linen_box'=>$request->linen_box,
            'leather_sleeve'=>$request->leather_sleeve,
        ]);

        return response(["msg"=>""],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        //
        $product->destroy($id);

        return response(["msg"=>""],200);
    }
}
