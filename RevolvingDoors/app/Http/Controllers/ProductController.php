<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProductType;

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getProduct()
    {
        return view('product/product', array("page_title" => "Our products"));    
    }

    public function getManual()
    {
        return view('product/manual', array("page_title" => "Manual Doors"));    
    }

    public function getAutomatic()
    {
        return view('product/automatic', array("page_title" => "Automatic Doors"));    
    }

    public function getSecurity()
    {
        return view('product/security', array("page_title" => "Security Doors"));    
    }
    
    public function getType($slug)
    {
        $type = ProductType::where(['slug' => $slug])->first();
        $gallery = array();
        foreach ($type->products as $p)
        {
            $gallery[] = $p->gallery;    
        }
        
        return view('product/type', ['page_title' => $type->name, 'productType' =>$type, 'GalleryMatrix' => $gallery]);
    }
}
