@extends('admin.layouts.app')

@section('content')

<div>
    <button class="btn-success btn-sm"  id="show-new-Customer-form">Add Customer</button>
</div>
<div class=" col-md-12 mt-3" >
    <div >
         @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="card shadow">
                <div class="card-body">
                    @component('admin.layouts.components.forms.addcustomer')

                    @endcomponent
                </div>
            </div>
    </div>
</div>
<div class="row mt-3 " >

    <div class="row">
        @foreach ($customers as $customer)

        @endforeach
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center"><h5 class="text-info"><b>Customers</b></h5></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                               <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zipcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name}}</td>
                                    <td>{{ $customer->email}}</td>
                                    <td>{{ $customer->phone}}</td>
                                    <td>{{ $customer->address}}</td>
                                    <td>{{ $customer->city}}</td>
                                    <td>{{ $customer->state}}</td>
                                    <td>{{ $customer->zipcode}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-md-6 offset-md-4">
                        <div class="" style="margin:0 auto;">
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection
@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/customer.js') }}"></script>
@endpush
