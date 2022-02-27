<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\footwears;
use App\Models\mens;
use App\Models\sales;
use App\Models\womens;
use Illuminate\Http\Request;

class SearchController extends Controller
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
    public function search(Request $request)
    {
        $accessories = accessories::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        $footwear = footwears::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        $men = mens::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        $sale = sales::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        $women = womens::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();
        return view('search', ['products' => $accessories,$footwear,$men,$sale,$women], compact('accessories', 'footwear', 'men','sale','women'));
    }
}
