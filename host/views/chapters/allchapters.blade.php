@extends('layouts.dashapp')
@section('my-content')
<h3 class="text-center">Welcome to userlist</h3>
<div class="container">
<input type="search" id="search" class="form-control" placeholder="Search ....">
</div><br>
@if(count($chaps) > 0)
<div class="container">
 
	<table class="table table-bordered">
		<tbody id="contactTable"><tr><th>Chapter name</th><th>Chapter Email</th><th>Chapter Phone</th><th>Chapter name</th><th>president name</th><th>president email</th><th>president phone</th><th colspan="2">Action</th></tr></tbody>
	@foreach ($chaps as $d)
		<tr>
		
			<td>{{$d->chapter_name}}</td>
			<td>{{$d->chapter_email}}</td>
			<td>{{$d->chapter_phone}}</td>
			<td>{{$d->chapter_abbreviation}}</td>
			<td>{{$d->president_name}}</td>
			<td>{{$d->president_email}}</td>
			<td>{{$d->president_phone}}</td>
			<!-- <td>{{$d->status}}</td> -->
            
			
			<td><a  class="btn btn-primary">Edit</a></td>
			<!-- <td>href="chapter/{{$d->id}}/edit"<a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td> -->
		</tr>
		
	
@endforeach
</table>
{{ $chaps->links() }}

</div>
@endif

@endsection
