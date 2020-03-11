<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Cursos</title>
		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>

		
		
		   <!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

		<!-- Ionic icons-->
		<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">	
 
        <!-- main css -->
        <link rel="stylesheet" href="{{asset ('app-assets/css/styles.css') }}">
		<link rel="shortcut icon" href="{{asset ('app-assets/images//favicon.png') }}" />
  
    </head>
<body>
    <div id="app" class="demo">
  
    <header class="header_area">	
		<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a href="{{ url('/') }}"> <img src="app-assets/images/logoC.svg" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end mr-auto" id="navbarSupportedContent">
         
            @guest   
            @if (Route::has('register'))
            <ul class="navbar-nav mr-5">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('/curses') }}">Cursos</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">info</a>
                    </li>
            </ul>
         
            <div class="mr-5">
            <a href="{{ url('/login') }}" class="btn2-outline btn-s info">Inicia sesion</a>
         
            <a href="{{ url('/register') }}" class="btn3 btn-s success ml-2">Registrate</a>
         
            </div>
            @endif
            @else
            <ul class="navbar-nav mr-5">
                   <li class="nav-item">
                        <a class="nav-link" href="{{ url('/curses') }}">Mis cursos</a>
                   </li>
                  
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @can('isAdmin')
                                
                                    <a class="dropdown-item" href="{{ url('/admin') }}">
                                        Admin
                                    </a>
                        
                                 @endcan
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
                </ul>

            @endguest     
            </div>
        </div>
    </nav>
</header>


    <main class="demo">
            @yield('content')
    </main>
    
</div>
<div class="footer bgDark">
            <div class="">
                <small>©2020 All Rights Reserved. Curses</small>
            </div>
</div>

  
</body>

</html>
