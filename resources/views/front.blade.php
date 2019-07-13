<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SafaShop</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
<style>
    body{
        background-image: url('images/images.png');
     
    }

</style>
</head>

<body>
      <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                SafaShop
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav-item" style="margin-right:10px">
                                <a class="nav-link   " href="{{ url('/') }}">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        @if (Auth::check())
                        <li class="nav-item dropdown" style="margin-right:10px">
                            <a class="nav-link dropdown-toggle    " href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-tags"></i>    Product
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home')
                                }}"><i class="fa fa-list"></i> List Produk</a>
                                <a class="dropdown-item" href="{{ route('admin.products.index')
                                }}"><i class="fa fa-list"></i> List Produk (user)</a>

                                <a class="dropdown-item" href="{{ route('admin.products.create')
                                }}"><i class="fa fa-plus"></i> Tambah</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" style="margin-right:10px">
                            <a class="nav-link dropdown-toggle   " href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-exchange-alt"></i> Order
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.orders.index')
                                }}"><i class="fas fa-list"></i> List</a>

                                <a class="dropdown-item" href="{{ route('admin.orders.create')
                                }}"><i class="fas fa-plus"></i> Tambah</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('carts.index') }}"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-danger">
                            @if(session('cart'))
                                {{ count(session('cart')) }}
                            @else
                                0
                            @endif
                            </span></a>
                        </li>
                        @endif
                    </ul>
                    <div class="clearfix"> </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="margin-right:10px" class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
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

        
          <div id="band" class="container text-center">
            <img src="images/sale.jpg" width="100%" height="450px">
            
              <h1>Welcome to SafaShop !</h1>
              
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <br>  
        </div>
        <hr>
    

        <main class="py-4">
        <div class="container mt-4">
    <div class="row ml-4">
        <div class="col-md-9 offset-md-3" >
            <div class="form-group" style="float:right;>
                <form action="{{url('/')}}">
                    <select class="custom-select mr-sm-2" id="categories" name="filter_category">
                        <option hidden>Choose Category...</option>
                        @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach                       
                    </select>
                    </form>
                </div>
                <br>

            </div>
            <div class="col-md-9 offset-md-3">
                <div class="form-group" style="float:right;">
                <form action="{{url('/')}}">
                    <select name="sorting" id="sorting" class="form-control">
                        <option hidden> Sort By</option>
                        <option value="best_seller">Best Seller</option>
                        <option value="terbaik">Terbaik</option>
                        <option value="termurah">Termurah</option>
                        <option value="termahal">Termahal</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="most_viewed">View</option>
                    </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">

            @yield('content')
            </div>
</div>
        </main>
    </div>
    @include('layouts.script')


    

</body>
</html>