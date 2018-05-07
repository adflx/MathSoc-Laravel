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

	<h3>Display Member</h3>
		<div class="row">
		
		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >	
					<th class="text-center" >ID No.</th>
					<th class="text-center" >Name</th>
					<th class="text-center" >Course</th>
					<th class="text-center" >Sex</th>
					<th class="text-center" >Professor</th>
					<th class="text-center" >Subject</th>
					<th class="text-center" >Date of Payment</th>
					<th class="text-center" >Payment Status</th>
					<th class="text-center" >Membership Status</th>
					<th class="text-center" >Membership Duration</th>
					<th class="text-center" >Created At</th>
					<th class="text-center" >Updated At</th>
					<th class="text-center" >Updated By</th>					
					<th class="text-center" >Action</th>
	</tr>
</thead>
<tbody>
@foreach($mem as $member)

<tr>
						<td class="text-center" >{{$member->idno}}</td>
						<td class="text-center" >{{$member->lname}},{{$member->fname}} {{$member->mi}}  </td>
						<td class="text-center" >{{$member->course}}</td>
						<td class="text-center" >{{$member->sex}}</td>
						<td class="text-center" >{{$member->professor}}</td>
						<td class="text-center" >{{$member->subject}}</td>
						<td class="text-center" >{{$member->datepay}}</td>
						<td class="text-center" >{{$member->paystat}}</td>
						<td class="text-center" >{{$member->memstat}}</td>
						<td class="text-center" >{{$member->memsy}}</td>
						<td class="text-center" >{{$member->created_at}}</td>
						<td class="text-center" >{{$member->updated_at}}</td>
						<td class="text-center" >{{$member->updated_by}}</td>
						<td class="text-center" >
					
						<a href="member.php?rquest=edit&idno='.$s['id'].'" class="btn btn-info link-edit" role="button">
												 Edit 
												</a >
												<br> 
												<a href="member.php?rquest=pay&idno='.$s['id'].'" class="btn btn-info link-pay" role="button">
												
											 Payment Confirmation 
												</a>
					
						 
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
