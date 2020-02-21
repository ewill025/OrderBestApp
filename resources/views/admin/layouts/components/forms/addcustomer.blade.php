<form action="{{ route('admin.customers.store') }}" method="POST" id="form-holder">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="name">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email"> Email</label>
        <input type="text" class="form-control {{ $errors->has ('email') ? 'is-invalid': ''}}" name="email">
         @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
        @endif
    </div>
     <div class="form-group">
        <label for="name"> Phone </label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="phone">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
     <div class="form-group">
        <label for="name"> Address</label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="address">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
     <div class="form-group">
        <label for="name"> City</label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="city">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
     <div class="form-group">
        <label for="name">State</label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="state">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Zipcode</label>
        <input type="text" class="form-control {{ $errors->has ('name') ? 'is-invalid': ''}}" name="zipcode">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <button class="btn btn-block btn-dark">Add New Customer</button>
</form>
@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/customer.js') }}"></script>
@endpush
