@extends('admin.layouts.app')

@section('content')

<div class=" row d-flex ">
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="col-md-12">
<div class="card shadow">
                <div class="card-body">
                   <form  action="{{ route('admin.orders.store') }}" method="POST" role="form">
                    @csrf
                        <h2 class="text-secondary pb-2"> Customer Information</h2>
                            <div class="input-group mb-3">
                                <select class="form-control" id="customer" name="customer" required>
                                <option value="">Select Customer</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}"data-email="{{$customer->email}}"
                                            data-phone="{{$customer->phone}}"
                                            data-address="{{$customer->address}}"
                                            data-city="{{$customer->city}}"
                                            data-state="{{$customer->state}}"
                                            data-zip="{{$customer->zipcode}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
                                    <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" required/>
                                    <input type="text" class="form-control" placeholder="Date" id="date" name="date" required/>

                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Street Address" id="address" name="address" required/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="City" id="city" name="city" required/>
                                    <input type="text" class="form-control" placeholder="State" id="state" name="state" required/>
                                    <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required/>
                                </div>

                                    <h2 class="text-secondary pb-2"> Order Information</h2>
                                    <div class="input-group mb-3">


                                    <select class="form-control" name="model" id="model">
                                        <option value="">Select Model:</option>
                                        @foreach ($devices as $device)
                                            <option value="{{$device->device_id}}">{{$device->model}}</option>
                                        @endforeach

                                    </select>
                                            <select class="form-control" name="size" id="size">
                                                    <option value="">Choose Space Size:</option>


                                            </select>
                                        <select class="form-control" name="colors" id="colors">
                                                    <option value="">Choose Color:</option>


                                            </select>
                                    </div>
                                    <div class="input-group mb-3">
                                            <select class="form-control" name="carriers" id="carriers">
                                                <option>Choose Carrier:</option>
                                                @foreach ($carriers as $carrier)
                                            <option value="{{$carrier->carrier_id}}">{{$carrier->carrier}}</option>
                                        @endforeach

                                            </select>
                                            <input type="text" class="form-control" onmouseover="this.focus();" placeholder="Enter or Scan MSIN#" name="msin" id="msin" value="" required/>

                                            <input type="text" class="form-control" placeholder="Device Phone Number" name="number2" required disabled/>
                                            <div class="input-group-prepend">
                                               <span class="input-group-text">TBRKRSORD-</span>
                                            </div>
                                            <input id="order_no" name="order_no" value="" class="form-control" type="text" required disabled>
                                    </div>
                                    <div class="row">
            <div class="col-md-12">
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="table-responsive">
                <table class="table table-bordered" id="purchaseInvoice">
                  <tbody>

                  <tr class="tbl_header_color dynamicRows">
                    <th width="30%" class="text-center">Sales Person</th>
                    <th width="10%" class="text-center">P.O. Number}</th>
                    <th width="10%" class="text-center">Requistioner</th>
                    <th width="15%" class="text-center">Shipped Via</th>
                    <th width="10%" class="text-center">F.O.B. Point</th>
                    <th width="10%" class="text-center">Description</th>
                    <th width="10%" class="text-center">Quantity</th>
                    <th width="5%"  class="text-center">Unit Price</th>
                  </tr>
                  <tr></tr>

                  <tr class="tableInfo"><td colspan="6" align="right"><strong>Subtotal</strong></td><td align="left" colspan="2"><strong id="subTotal"></strong></td></tr>
                  <tr class="tableInfo"><td colspan="6" align="right"><strong>Sales Tax</strong></td><td align="left" colspan="2"><strong id="taxTotal"></strong></td></tr>
                  <tr class="tableInfo"><td colspan="6" align="right"><strong>Total</strong></td><td align="left" colspan="2"><input type='text' name="total" class="form-control" id = "grandTotal" readonly></td></tr>
                  </tbody>
                </table>
                </div>
                <br><br>

              </div>
            </div>
        </div>

                                    <div>
                                        <input type="submit" class="btn btn-dark btn-sm" value="Create Order">
                                    </div>
                </div>
                    </form>
        </div>
    </div>

</div>

@endsection
@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/order.js') }}"></script>
@endpush

