@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">All Children</h1>
            <hr>
        </div>
    </div>	
    <div class="container">
    	<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">DateOfBirth</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Guardian</th>
		      <th scope="col">County</th>
		      <th scope="col">Photo</th>
		      <th scope="col" colspan="3">Photo</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($children as $child)
		    <tr>
		      <td>{{$child->id}}</td>
		      <td>{{$child->name}}</td>
		      <td>{{$child->dob}}</td>
		      <td>{{$child->gender}}</td>
		      <td>{{$child->guardian}}</td>
		      <td>{{$child->county}}</td>
		      <td>
		      	<img class="img-circle" src="{{asset('images/avatar.png')}}" style="width: 90px; height: 60px">
		      </td>

		      <td><a href="{{action('ChildController@show', $child['id'])}}" class="btn btn-info">Show</a></td>
	        <td>
	        <td><a href="{{action('ChildController@edit', $child['id'])}}" class="btn btn-warning">Edit</a></td>
	        <td>
	          <form action="{{action('ChildController@destroy', $child['id'])}}" method="post">
	            @csrf
	            <input name="_method" type="hidden" value="DELETE">
	            <button class="btn btn-danger" type="submit">Delete</button>
	          </form>
	        </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
    </div>
</div>

@endsection