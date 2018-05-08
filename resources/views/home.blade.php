@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

	<h3>Home</h3>
	<ul id="menu" class="list-group">
		<li><a class="list-group-item" href="{{ url('/memberdashboard') }}"><span class="glyphicon glyphicon-dashboard"></span> Member</a></li>
		<li><a class="list-group-item" href="{{ url('/officer') }}"><span class="glyphicon glyphicon-user"></span> Officer</a></li>
		<li><a class="list-group-item" href="index.php?request=event"><span class="glyphicon glyphicon-list-alt"></span> Event</a></li>
		<li><a class="list-group-item" href="index.php?request=collection"><span class="glyphicon glyphicon-list-alt"></span> Collection</a></li>
		<li><a class="list-group-item" href="index.php?request=expense"><span class="glyphicon glyphicon-list-alt"></span> Expense</a></li>
		<li><a class="list-group-item" href="index.php?request=report"><span class="glyphicon glyphicon-list-alt"></span> Report</a></li>
		<li><a class="list-group-item" href="index.php?request=changepass"><span class="glyphicon glyphicon-list-alt"></span>Change Password</a></li>
	</ul>
		</div>
		<div class="col-sm-1">
	</div>
	</div>
	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
