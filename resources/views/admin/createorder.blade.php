@extends('admin.layouts.app')

@section('content')
<div class=" col-md-12 mt-3">
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>
        <div class="card shadow">
                <div class="card-body">
                   <form  class="container" action="{{ route('admin.orders.store') }}" method="POST" role="form">
                        <h2 class="text-secondary pb-2"> Customer Information</h2>
                            <div class="input-group mb-3">
                                <select class="form-control" name="name" required>
                                <option value="">Select Customer</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                    <input type="text" class="form-control" placeholder="Phone Number" name="number" required/>
                            </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Street Address " name="address" required/>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="City" name="city" required/>
                                    <input type="text" class="form-control" placeholder="State"  name="state" required/>
                                    <input type="text" class="form-control" placeholder="Zip Code" name="zip" required/>
                                </div>
                                    <h2 class="text-secondary pb-2"> Order Information</h2>
                                    <div class="input-group mb-3">

                                    <select class="form-control" name="devices" onchange="getColor(this.value);">
                                        <option value="">Select Phone:</option>

                                    </select>
                                            <select class="form-control" name="device_space" id="">
                                                    <option value="">Choose Space Size:</option>


                                            </select>
                                        <select class="form-control" name="colors" id="">
                                                    <option value="">Choose Color:</option>


                                            </select>
                                    </div>
                                    <div class="input-group mb-3">
                                            <select class="form-control" name="carriers" id="carrier">
                                                <option>Choose Carrier:</option>

                                            </select>
                                            <input type="text" class="form-control" onmouseover="this.focus();" placeholder="Enter or Scan MSIN#" name="msin" value="" required/>

                                            <input type="text" class="form-control" placeholder="Phone Number" name="number2" required/>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-dark btn-sm" value="Create Order">
                                    </div>
                </div>
                    </form>
        </div>
</div>
@endsection
@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/order.js') }}"></script>
@endpush
