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
										<li class="text-center"><a class="nav-link"  href="{{ url('/member/display') }}">Display Member</a></li>

								</ul>
							</li>

			 <li class="dropdown">
								<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Officer <span class="caret"></span></a>
								<ul class="dropdown-menu">
										<li class="text-center"><a class="nav-link" href="{{ url('/officer/display') }}">Display Officer</a></li>

								</ul>
							</li>


			 <li class="dropdown">
								<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
								<ul class="dropdown-menu">
										<li class="text-center"><a class="nav-link" href="{{ url('/event/display') }}">Display Event</a></li>

								</ul>
							</li>

							 <li class="dropdown">
								<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collection <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="text-center"><a class="nav-link" href="{{ url('/collect') }}">Collection Dashboard</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/event/new') }}">New Collection</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/collect/display') }}">Display Collection</a></li>

								</ul>
							</li>

			 <li class="dropdown">
								<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expense <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="text-center"><a class="nav-link" href="{{ url('/expense') }}">Expense Dashboard</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/expense/new') }}">New Expense</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/expense/display') }}">Display Expense</a></li>

								</ul>
							</li>

			 <li class="dropdown">
								<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="text-center"><a class="nav-link" href="{{ url('/report') }}">Report Dashboard</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/report/new') }}">New Report</a></li>
									<li class="text-center"><a class="nav-link" href="{{ url('/report/display') }}">Display Report</a></li>

								</ul>
							</li>



									</ul>

									<!-- Right Side Of Navbar -->
									<ul class="navbar-nav ml-auto">
											<!-- Authentication Links -->

													<li class="nav-item dropdown">
															<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																Hey,  {{ Auth::user()->fname }} {{ Auth::user()->lname }}  <span class="caret"></span>
															</a>

															<div class="dropdown-menu" aria-labelledby="navbarDropdown">

																<a class="dropdown-item" method="post" name="password" href="{{action('OfficerController@editpass',Auth::user()->studID)}}"
																	onclick="event.preventDefault();
																								document.getElementById('pass-form').submit();"  >
																		{{ __('Change Password') }}
																</a>

																<a class="dropdown-item" href="{{ route('logout') }}"
																	 onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																		{{ __('Logout') }}
																</a>




																	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																			@csrf
																	</form>

																	<form id="pass-form" action="{{action('OfficerController@editpass')}}" method="POST" style="display: none;">
																			@csrf
																	</form>
															</div>
													</li>

									</ul>
							</div>
					</div>
			</nav>
	</div>
