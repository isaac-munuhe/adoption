@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Available Children</h1>
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
				  <img src="{{asset('/uploads/children/'.$child->image)}}" style="width: 90px; height: 60px">
		      </td>
		    </tr>
		    @empty
    		<p>No child found for adoption!</p>
		    @endforelse
		  </tbody>
		</table>
    </div>
</div>

@endsection