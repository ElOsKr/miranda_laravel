<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('orders', ['orders' => $orders]);
    }

    public function getOrder(Request $request){
        $order = Order::where('id',$request->input('id'))->get();
        return view('orderEdit', ['order' => $order[0]]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        list($id,$number) = explode("&",$request->input('room_id'));
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'room_id' => $id, 
            'room_number'=> $number,
            'type' => $request->input('type'), 
            'description' => $request->input('description')
        ]);

        $order->save();

        return back()->with('success', "Order sent succesfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'type' => 'required',
            'description' => 'required',
        ]);
        Order::where('id', $request->input('id'))->update($validateData);
        return redirect('orders')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
