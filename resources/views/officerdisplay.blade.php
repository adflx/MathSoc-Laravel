@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Officers</div>

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

	<h3>Display Officer</h3>
		<div class="row">

		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >
		<th class="text-center" >ID No.</th>
		<th class="text-center" >Name</th>
		<th class="text-center" >Position</th>
		<th class="text-center" >Course</th>
		<th class="text-center" >Year</th>
		<th class="text-center" >Section</th>
		<th class="text-center" >Action</th>
	</tr>
</thead>
<tbody>
@foreach($officer as $officer)

<tr>
						<td class="text-center" >{{$officer->studID}}</td>
						<td class="text-center" >{{$officer->lname}},{{$officer->fname}} {{$officer->mi}}  </td>
						<td class="text-center" >{{$officer->position}}</td>
						<td class="text-center" >{{$officer->course}}</td>
						<td class="text-center" >{{$officer->year}}</td>
						<td class="text-center" >{{$officer->section}}</td>
						<td class="text-center" >
					<form action="/officer/edit/{{$officer->studID}}">
            <button type="submit" name="edit" class="btn btn-info">Edit</button>
            {{ csrf_field() }}
          </form>
						</td>
				</tr>


@endforeach
</tbody>
</table>

	</div>

	</div>
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
