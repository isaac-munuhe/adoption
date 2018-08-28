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
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">DateOfBirth</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Guardian</th>
		      <th scope="col">County</th>
		      <th scope="col">Photo</th>
		      <th scope="col">Status</th>
		      <th scope="col" colspan="3">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($children as $child)
		    <tr>
		      <td>{{$child->id}}</td>
		      <td>{{$child->fname}}</td>
		      <td>{{$child->lname}}</td>
		      <td>{{$child->dob}}</td>
		      <td>{{$child->gender}}</td>
		      <td>{{$child->guardian}}</td>
		      <td>{{$child->county}}</td>
		      <td>
		      	<img src="/storage/photos/{{ $child->image }}" style="width: 90px; height: 60px">
		      </td>
		      <td>@include('layouts.status', ['status' => $child->status])</td>
		      <td><a href="{{route('children.show', $child['id'])}}" class="btn btn-info">Adopt</a></td>
	        <td>
	        @if(Auth::check())
        	@if(Auth::user()->admin)
	        <td><a href="{{action('ChildController@edit', $child['id'])}}" class="btn btn-warning">Edit</a></td>
	        <td>
	          <form action="{{action('ChildController@destroy', $child['id'])}}" method="post">
	            @csrf
	            <input name="_method" type="hidden" value="DELETE">
	            <button class="btn btn-danger" type="submit">Delete</button>
	          </form>
	        </td>
	        @endif
	        @endif
		    </tr>
		    @empty
    		<p>No data found!</p>
		    @endforelse
		  </tbody>
		</table>
    </div>
</div>

@endsection