@extends('layouts.dashapp')
@section('my-content')
<h3 class="text-center">Welcome to userlist</h3>
<div class="container">
<input type="search" id="search" class="form-control" placeholder="Search ....">
</div><br>
@if(count($dat) > 0)
<div class="container">
 
	<table class="table table-bordered">
		<tbody id="contactTable"><tr><th>Image</th><th>User_name</th><th>Email</th><th>Phone</th><th>Chapter name</th><th>origin</th><th>Matric No</th><th>Role</th><th>Status</th><th colspan="2">Action</th></tr></tbody>
	@foreach ($dat as $d)
		<tr>
			<td><img src="upload/{{$d->user_image}}" style="width: 50px;height: 50px"></td>
			<td>{{$d->name}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->phone}}</td>
			<td>{{$d->chapter_name}}</td>
			<td>{{$d->origin}}</td>
			<td>{{$d->matricno}}</td>
			<td>{{$d->role}}</td>
			<td>{{$d->status}}</td>
            
			
			<td><a href="chapter/{{$d->id}}/edit" class="btn btn-primary">Edit</a></td>
			<!-- <td><a href="{{url('/deleteproduct/'.$d->id)}}" class="btn btn-primary">Delete</a></td> -->
		</tr>
		
	
@endforeach
</table>
{{ $dat->links() }}

</div>
@endif

@endsection
