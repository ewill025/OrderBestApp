@extends('admin.layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<div class="container">
    <div class="row">

        <div class="col-sm-5">
            <div class="card shadow">
                <div class="card-body">
                    @component('admin.layouts.components.forms.adduser')

                    @endcomponent
                </div>
            </div>

        </div>
        <div class="col-sm-5">
            <div class="card shadow">
                <div class="card-header"> Current Users</div>
                <ul class="list-group list-group-flush">
                    @if($users)
                        @foreach ($users as $user)
                            <li class="list-group-item"><a href="{{ route('admin.user', ['id'=>$user->id]) }}">{{$user->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>

</div>


@endsection
