@extends('admin.layouts.app')

@section('content')
   <div class="row">
        <div class="container text-center p-3"><br>
		    <strong ><h1>Welcome To OrderBest Management System</h1></strong><br>
		       <!--  <section>
			        <div class="container-fluid mt-5">
				        <div class="row d-flex">
					        <div class= "col-lg-4">
					 	        <div class="card p-3 mb-5 shadow text-center">
					 		        <div class="icon">
					 			        <i class="fas fa-user-plus fa-5x"></i>
								        <a class="stretched-link" href="{{ route('admin.users') }}"></a>
							        </div>
							            <div>Add User</div>
						 	    </div>
					 	    </div>
                                <div class= "col-lg-4">
                                    <div class="card p-3 mb-5 shadow text-center">
                                        <div class="icon">
                                            <i class="fas fa-users fa-5x"></i>
                                            <a class="stretched-link" href="{{ route ('admin.customers') }}"></a>
                                        </div>
                                            <div>View Customers</div>
                                    </div>
                                </div>
                                <div class= "col-lg-4">
                                    <div class="card p-3 mb-5 shadow text-center">
                                        <div class="icon">
                                            <i class="fas fa-mobile-alt fa-5x"></i>
                                            <a class="stretched-link" href=""></a>
                                        </div>
                                            <div>View Devices</div>
                                    </div>
                                </div>
                                <div class= "col-lg-4">
                                    <div class="card p-3 mb-5 shadow text-center ">
                                        <div class="icon">
                                            <i class="fas fa-file-alt fa-5x"></i>
                                            <a class="stretched-link"  href="{{ route ('admin.orders') }}" ></a>
                                        </div>
                                            <div class="text-center">View Orders</div>
                                    </div>
                                </div>
				        </div>
			        </div>
		        </section>-->
	    </div>
    </div>

     <!-- Start latest invoice -->
     <div class="row d-flex">
         <div class=" card p-3 mb-5  col-md-12 shadow ">
            <div class="card-header text-center">
              <h5 class="text-info"><b>Latest Invoices</b></h5>
            </div>
                <div class="card-body">

                  <table class="table table-striped">
                      <thead>
                      <tr>
                      <th class="text-center">Order No.</th>
                      <th class="text-center">Invoice No.</th>
                      <th class="text-center">Customer</th>
                      <th class="text-center">Amount</th>
                      <th class="text-center">Date</th>
                      </tr>
                      </thead>
                      <tbody>

                      </tbody>
                  </table>

                </div>
            </div>


         <!-- Customer List -->
           {{-- @foreach ($customers as $customer)

            @endforeach --}}
            <div class="card p-3 mb-5  col-md-12 shadow">
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
                                {{--@foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->name}}</td>
                                        <td>{{ $customer->email}}</td>
                                        <td>{{ $customer->phone}}</td>
                                        <td>{{ $customer->address}}</td>
                                        <td>{{ $customer->city}}</td>
                                        <td>{{ $customer->state}}</td>
                                        <td>{{ $customer->zipcode}}</td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                        </div>

                    <div class="row mt-5 ">
                        <div class="col-md-6 offset-md-4">
                            <div class="" style="margin:0 auto;">
                               {{-- {{ $customers->links() }}--}}
                            </div>
                        </div>
                    </div>
            </div>




     </div>









@endsection
