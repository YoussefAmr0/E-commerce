<?php

namespace App\Http\Controllers;

use App\Models\sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $sale=sales::all();
        return view("layout.Sale.Sales",compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layout.Sale.createsales");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new sales();
        $sale->name = $request->input('name');
        $sale->old_price = $request->input('old_price');
        $sale->new_price = $request->input('new_price');
        $sale->sale_percent = $request->input('sale_percent');
        $sale->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $sale->image = $filename;
        }

        $sale->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = sales::findOrFail($id);
        return view('layout.Sale.showsales', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = sales::findOrFail($id);
        return view('layout.Sale.editsales', compact('sale'));
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
        $sale = sales::findOrFail($id);
        $sale->update([
            'name' => $request->name,
            'old_price' => $request->old_price,
            'new_price' => $request->new_price,
            'sale_percent' => $request->sale_percent,
            'description' => $request->description,
            
        ]);
        if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/students/', $filename);
        $sale->image = $filename;
    }
    $sale->save();
    return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = sales::findOrFail($id);
        $sale->delete();
        return redirect()->back();
    }
}
