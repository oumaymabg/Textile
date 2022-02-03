<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User ; 
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role=Auth::user()->role;
        $user =  Auth::user();
        if ( $role == '1') {
            $orders = Order::all();
            return view ('File.AllOrders', [
                'orders' => $orders,
                'user' => $user
            ]);

        }
        else {
            $ConnectedUser = Auth::user()->id ;
            $orders = Order::where('id_customer', $ConnectedUser)->get();
            return view ('File.AllOrders', [
                'orders' => $orders,
                'user' => $user
            ]);
        }




      return view('File.AllOrders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =  Auth::user();
        return view('File.add_new_order', [
            'user' => $user
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create ( [
            'id_customer' => $ConnectedUser = Auth::user()->id ,
            'id_product' => $request->input('ProductId'),
            'order_status' => $request->input('status'),
            'deadline' => $request->input('deadline')
        ]);
        return redirect('/order');
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
   
}
