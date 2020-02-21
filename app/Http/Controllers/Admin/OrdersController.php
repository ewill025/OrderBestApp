<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Brands;
use App\Devices;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('admin.orders', ['orders' => $orders]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $devices = Devices::all();
        $brands = Brands::all();
        $email= Customer::pluck('id','email');

        return view('admin.createorders', compact('customers','devices','brands', 'email'));
    }
    public function getEmail()
    {
        $customer_id = Customer::get('id');
        $email = Customer::select('email')->where('id','=',$customer_id)->get();

        return $email;
    }
    public function getPhone()
    {
        $customer_id = Customer::get('id');
        $phone = Customer::select('phone')->where('id', '=', $customer_id)->get();

        return $phone;
    }
    public function getAddress()
    {
        $customer_id = Customer::get('id');
        $address = Customer::select('address')->where('id', '=', $customer_id)->get();

        return $address;
    }
    public function getCity()
    {
        $customer_id = Customer::get('id');
        $city = Customer::select('city')->where('id', '=', $customer_id)->get();

        return $city;
    }
    public function getState()
    {
        $customer_id = Customer::get('id');
        $state = Customer::select('state')->where('id', '=', $customer_id)->get();

        return $state;
    }
    public function getZip()
    {
        $customer_id = Customer::get('id');
        $zip = Customer::select('zipcode')->where('id', '=', $customer_id)->get();

        return $zip;
    }

    public function getBrand()
    {
        $brand = DB::table('brands')->orderBy('id', 'asc')->get();

        return $brand;
    }
    public function getColor(Request $request)
    {

        $color = Devices::select('device_id','color_1','color_2')->where('device_id',$request->device_id)->get();

        return response()->json($color);
    }

    public function getSize(Request $request)
    {

        $size = Devices::select('size_1','size_2','size_3')->where('device_id',$request->device_id)->get();

        return $size;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_number' => ['string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'phone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'device' => ['required', 'string'],
            'space_size' => ['required', 'string', ],
            'color' => ['required', 'string',],
            'carrier' => ['required', 'string'],
            'msin' => ['required', 'string'],
            'device_number' => ['required','string'],
            'order_date' => ['string'],
        ]);


        $orders = new Order();
        $orders->name = $request->name;
        $orders->email = $request->email;
        $orders->phone = $request->phone;
        $orders->address = $request->address;
        $orders->city = $request->city;
        $orders->state = $request->state;
        $orders->zipcode = $request->zipcode;
        $orders->device = $request->device;
        $orders->space_size = $request->space_size;
        $orders->color = $request->color;
        $orders->carrier = $request->carrier;
        $orders->msin = $request->msin;
        $orders->device_number = $request->device_number;
        $orders->order_date = $request->order_date;

        $orders->save();

        return redirect('admin/orders')->with('success', 'Order Successfully Added!');
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
