@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Add New Child</h1>
            <hr>
        </div>
    </div>
</div>

<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="{{route ('children.store')}}" method="POST" enctype="multipart/form-data">
				@csrf

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="fname">First Name</label>
			      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="lname">Last Name</label>
			      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="dob">Date Of Birth</label>
			      <input type="date" class="form-control" name="dob" id="dob">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="guardian">Guardian</label>
			    <input type="text" class="form-control" name="guardian" id="guardian" placeholder="Guardian Name">
			  </div>
			  <div class="form-group">
			    <label for="county">County</label>
			    <input type="text" class="form-control" name="county" id="county" placeholder="e.g,Meru County">
			  </div>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="image">Photo</label>
			      <input type="file" class="form-control" name="image" id="image" placeholder="Enter child's photo">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="gender">Gender</label>
			      <select id="gender" name="gender" class="form-control">
			        <option selected>Choose...</option>
			        <option value="Male">Male</option>
			        <option value="Female">Female</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
				    @include('layouts.status-select', ['status' => 0])
				</div>
			</div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


@endsection