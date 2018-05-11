

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

       @if (Auth::user()->role === 0)
         @include('layouts.rolea')
       @elseif (Auth::user()->role === 1)
         @include('layouts.roleb')
       @elseif (Auth::user()->role === 2)
         @include('layouts.rolec')
       @elseif(Auth::user()->role === 3)
         @include('layouts.roled')
       @endif
      @endauth




        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
