<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Admin Panel | ' . Auth::user()->name) }}</title>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/4f2aa4ed01.js"></script>
    @stack('admin.layouts.styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-fluid" src="/img/OrderBest.png" style="width:200px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                         @if (Route::has('register'))
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container-fluid">
            <div id="sidebar" class="sidebar float-left">
                <div class="text-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <h5>{{Auth::user()->name}}</h5>
                </div>
                <div class="items-container">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class=" nav-link text-white text-decoration-none" href="{{ route('home') }}">
                                <h6 class="menu-item"><i class="fas fa-tachometer-alt"></i> Dashboard</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none" href="{{ route('admin.users') }}">
                                <h6 class="menu-item"><i class="fas fa-users"></i> Users</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none" href="{{ route ('admin.customers') }}">
                                <h6 class="menu-item"><i class="fas fa-address-book"></i> Customers</h6>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none" href="">
                                <h6 class="menu-item"><i class="fas fa-address-book"></i> Invoices</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link text-white text-decoration-none" href="{{ route ('admin.orders') }}">
                                <h6 class="menu-item"><i class="fas fa-file-alt"></i> Orders</h6>
                            </a><hr>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none" href="">
                                <h6 class="menu-item"><i class="fas fa-user-cog"></i> Settings</h6>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>

        </main>
    </div>
    @stack('admin.layouts.scripts.scripts')
</body>

</html>
