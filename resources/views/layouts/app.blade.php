<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FlyBook') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <style>
        footer{background-color: #fff; padding: 25px;}
               ul, li{list-style-type: none;}
               .list{margin-top: 15px;}
        </style>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- @if (auth::middleware('auth:admin')) --}}
                <div class="navbar-brand" style="padding-top: 5px">
                    <a href="{{view('welcome')}}"><img class="img-responsive pull-left" src="/css/IMG/logo.png" width=90 height=60  style="max-height: 10%; padding-bottom: 1px"></a>
                </div>
                {{-- @endif --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login Piloto') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('instrutor.login') }}">{{ __('Login Instrutor') }}</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login Administrador') }}</a>
                            </li> --}}
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                        <!-- Left Side Of Navbar -->
                                <li class="nav-item">
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main class="py-4">
            @yield('content')
        </main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer class="w-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
            <h3>Sobre nos</h3>
            <p>O sistema foi desenvolvido por estudantes do Instituto Federal com parceria com a escola de parapente BlueSky. Desenvolvido por Enzo Douglas Paiva, Rafael Socovoski da Cruz e Thiago Kenji Yamauchi, com auxílio de  Matheus Piazzalunga Neivock e Luiz Fernando Delboni Lomba.
            </p>
      
            </div>
          
            <div class="col-md-6">
              <h5><strong>Contato</strong></h5>
              <p><strong>Endereço:</strong> 514 S. Magnolia St.
      Orlando, FL 32806 <!-- Random Adress -->
      </p>
              <p><strong>Email:</strong> email@example.com</p>
              <p><strong>Tel.:</strong> (67) 8112-6333</p>
            </div>
            <div class="col-md-6 list">
              <ul>
               
             <li><a href="https://www.facebook.com/Blue-Sky-Brasil-Escola-de-Voo-Livre-158914834217952/"><img src="iconf.png" alt="facebook" width=80 height=50></a></li>
                      <li><a href="#"><img src="iconi.png" alt="instagram" width=70 height=50></a></li>
            </ul>
      
            </div>
            <div class="col-md-6 list">
              <ul>
      
              </ul>
      
            </div>
          </div>
        </div>
       <div class="container">
          <div class="row">
            <div class="col-md text-center">
      
            FlyBook© 2019
      
          </div>
      
          
      
        
      </footer>
</body>
</html>
