<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/MATHSOC LOGO.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Math Society') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/math.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


			<div class="container-fluid">
				<div class="container-fluid" id="headed">
				<div class="row">
				<div class="col-sm-1"></div >
				<div class="col-sm-10">
				<a class="mathtitle" href="{{ url('/') }}"> <h1 class="text-center"><img src="{{asset('images/MATHSOC LOGO.png')}}" height="100px" > TUP Math Society</h1>
				</a>
				</div >

				<div class="col-sm-1"></div >
				</div>
				</div>

			</div>







		@auth
		<div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">

						<li  ><a class="nav-link"  href="{{ url('/') }}">Home</a></li>


				 <li class="dropdown">
                  <a class="nav-link"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link"  href="{{ url('/memberdashboard') }}">Member Dashboard</a></li>
                    <li class="text-center"><a class="nav-link"  href="member.php?request=new">New Member</a></li>
                    <li class="text-center"><a class="nav-link"  href="{{ url('/memberdisplay') }}">Display Member</a></li>

                  </ul>
                </li>

				 <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Officer <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link" href="{{ url('/officer') }}">Officer Dashboard</a></li>

                    <li class="text-center"><a class="nav-link" href="{{ url('/officer/display') }}">Display Officer</a></li>

                  </ul>
                </li>


				 <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link" href="event.php">Event Dashboard</a></li>
                    <li class="text-center"><a class="nav-link" href="event.php?request=new">New Event</a></li>
                    <li class="text-center"><a class="nav-link" href="event.php?request=view">Display Event</a></li>

                  </ul>
                </li>

                 <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collection <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link" href="collection.php">Collection Dashboard</a></li>
                    <li class="text-center"><a class="nav-link" href="collection.php?request=new">New Collection</a></li>
                    <li class="text-center"><a class="nav-link" href="collection.php?request=view">Display Collection</a></li>

                  </ul>
                </li>

				 <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expense <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link" href="expense.php">Expense Dashboard</a></li>
                    <li class="text-center"><a class="nav-link" href="expense.php?request=new">New Expense</a></li>
                    <li class="text-center"><a class="nav-link" href="expense.php?request=view">Display Expense</a></li>

                  </ul>
                </li>

				 <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"><a class="nav-link" href="report.php">Report Dashboard</a></li>
                    <li class="text-center"><a class="nav-link" href="report.php?request=new">New Report</a></li>
                    <li class="text-center"><a class="nav-link" href="report.php?request=view">Display Report</a></li>

                  </ul>
                </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav>
		</div>
		@endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
