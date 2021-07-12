<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Groupe digital | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css" media="all" />
	

    {{-- <link rel="stylesheet" href="{{ asset('css/froala_editor.css') }}">
  <link rel="stylesheet" href="{{ asset('css/froala_style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins/code_view.css') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins/image_manager.css') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins/image.css') }}"> --}}


	{{-- <script type="text/javascript" src="{{asset('js/froala_editor.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/align.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/code_beautifier.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/code_view.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/draggable.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/image.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/image_manager.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/link.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/lists.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/paragraph_format.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/paragraph_style.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/url.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/entities.min.js') }}"></script> --}}
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-default shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> GROUPE digital</a>
                
                   
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <style>
                        ul>li>a.nav-link{
                            font-weight: bold;
                           margin-left: 20px;
                          
                        }
                        ul>li>a.nav-link:hover{
                            background-color:darkgrey;
                            color: white;
                        }

                        ul{
                            font-weight: bold;
                           margin-left: 25px;
                        }
                    </style>

                         <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('offre.create') }}">Gestion des offres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">Gestion des Fre-lance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('userlist') }}">Gestion des Utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">Gestion du contenu home</a>
                        </li>
                    </ul> 
                
                  

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    </div>
</body>
</html>
