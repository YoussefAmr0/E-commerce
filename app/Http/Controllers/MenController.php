<?php

namespace App\Http\Controllers;

use App\Models\mens;
use Illuminate\Http\Request;

class MenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mens=mens::all();
        return view("layout.Men.Men", compact('mens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layout.Men.createmens");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mens = new mens();
        $mens->name = $request->input('name');
        $mens->price = $request->input('price');
        $mens->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $mens->image = $filename;
        }

        $mens->save();
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
        $mens = mens::findOrFail($id);
        return view('layout.Men.showmens', compact('mens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mens = mens::findOrFail($id);
        return view('layout.Men.editmens', compact('mens'));
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
        $mens = mens::findOrFail($id);
            $mens->update([
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
            $mens->image = $filename;
        }
        $mens->save();
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
        $mens = mens::findOrFail($id);
        $mens->delete();
        return redirect()->back();
    }
}
