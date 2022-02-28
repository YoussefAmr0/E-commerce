<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\Cart;
use App\Models\footwears;
use App\Models\mens;
use App\Models\sales;
use App\Models\womens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart= Cart::all()->where('user_id', Auth::id());
        $footwears= footwears::all()->where('user_id', Auth::id());
        $mens= mens::all()->where('user_id', Auth::id());
        $womens= womens::all()->where('user_id', Auth::id());
        $sales= sales::all()->where('user_id', Auth::id());
        $Accessories= Accessories::all()->where('user_id', Auth::id());
        return view("cart", compact('cart','footwears','mens','womens','sales','Accessories'));

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
        $cart = new Cart();
        $cart->user_id = $request->input('id');
        $cart->name = $request->input('name');
        $cart->quantity = $request->input('quantity');
        $cart->price = $request->input('price');
        $cart->image = $request->input('image');
        $cart->save();
        return redirect()->route('cart.index');

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
        $cart = cart::findOrFail($id);
            $cart->update([
                'quantity'=>$request->quantity,
            ]);
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
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->back();
    }
}
