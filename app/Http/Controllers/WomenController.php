<?php

namespace App\Http\Controllers;


use App\Models\womens;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class WomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $womens = womens::all();
        return view("layout.Women.women", compact('womens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layout.Women.createwomens");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $womens = new womens();
        $womens->name = $request->input('name');
        $womens->price = $request->input('price');
        $womens->description = $request->input('description');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/students/', $filename);
            $womens->image = $filename;
        }

        $womens->save();
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
        $womens = womens::findOrFail($id);
        return view('layout.Women.showwomen', compact('womens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $womens = womens::findOrFail($id);
        return view('layout.Women.editwomens', compact('womens'));
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
        $womens = womens::findOrFail($id);
        $womens->update([
            'name'=>$request->name,
            'price' => $request->price,
            'description' => $request->description,


        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/students/', $filename);
            $womens->image = $filename;
        }
        $womens->save();
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
        $womens = womens::findOrFail($id);
        $womens->delete();
        return redirect()->back();
    }
}
