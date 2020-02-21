@extends('admin.layouts.app')

@section('content')
<div>
     <a class="btn-success btn-sm text-decoration-none" href="{{ route('admin.createorders') }}">Create New Order</a>
</div>


<div class="row mt-3 " >

    <div class="row">
        @foreach ($orders as $order)

        @endforeach
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center">Orders</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                               <tr>
                                    <th>Order No.</th>
                                    <th>Customer Name</th>
                                    <th>Total</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $orders->order_number}}</td>
                                    <td>{{ $orders->name}}</td>
                                    <td>{{ $orders->total}}</td>
                                    <td>{{ $orders->order_date}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-md-6 offset-md-4">
                        <div class="" style="margin:0 auto;">

                        </div>
                    </div>
                </div>
        </div>

    </div>


@endsection
@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/order.js') }}"></script>
@endpush
