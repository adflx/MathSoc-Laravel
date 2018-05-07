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
	
	<h3>Member</h3>
	<ul id="menu" class="list-group">
		<li><a class="list-group-item" href="{{ url('/') }}"><span class="glyphicon glyphicon-dashboard"></span>New Member</a></li>
		<li><a class="list-group-item" href="{{ url('/memberdisplay') }}"><span class="glyphicon glyphicon-user"></span>Display Member</a></li>
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
