<?php

namespace App\Http\Controllers;

use App\Models\footwears;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FootwearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footwear=footwears::all();
        return view("layout.Footwear.Footwear",compact('footwear'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layout.Footwear.createfootwear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $footwear = new footwears();
        $footwear->name = $request->input('name');
        $footwear->price = $request->input('price');
        $footwear->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $footwear->image = $filename;
        }

        $footwear->save();
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
        $footwear = footwears::findOrFail($id);
        return view('layout.Footwear.showfootwear', compact('footwear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footwear = footwears::findOrFail($id);
        return view('layout.Footwear.editfootwear', compact('footwear'));
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
        $footwear = footwears::findOrFail($id);
        $footwear->update([
            'name'=>$request->name,
            'price' => $request->price,
            'description' => $request->description,

            
        ]);
        if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/students/', $filename);
        $footwear->image = $filename;
    }
    $footwear->save();
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
        $footwear = footwears::findOrFail($id);
        $footwear->delete();
        return redirect()->back();
    }
}
