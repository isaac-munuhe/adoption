@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Edit Child Details</h1>
            <hr>
        </div>
    </div>
    <div class="container">
	<div class="card">
		<div class="card-body">
			<form action="{{action('ChildController@update', $id)}}" method="POST">
				@csrf
				@method('PUT')
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="fname">First Name</label>
			      <input type="text" class="form-control" name="fname" id="fname" value="{{$child->fname}}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="lname">Last Name</label>
			      <input type="text" class="form-control" name="lname" id="lname" value="{{$child->lname}}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="dob">Date Of Birth</label>
			      <input type="date" class="form-control" name="dob" id="dob" value="{{$child->dob}}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="guardian">Guardian</label>
			    <input type="text" class="form-control" name="guardian" id="guardian" value="{{$child->guardian}}">
			  </div>
			  <div class="form-group">
			    <label for="county">County</label>
			    <input type="text" class="form-control" name="county" id="county" value="{{$child->county}}">
			  </div>
			<div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="gender">Gender</label>
			      <select id="gender" name="gender" value="{{ $child->gender }}" class="form-control">
			        <option selected>Choose...</option>
			        <option value="Male">Male</option>
			        <option value="Female">Female</option>
			      </select>
			    </div>
			</div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection