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
			      <label for="name">Name</label>
			      <input type="text" class="form-control" name="name" id="name" value="{{$child->name}}" placeholder="Name of Child">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="guardian">Guardian</label>
			    <input type="text" class="form-control" name="guardian" id="guardian" value="{{$child->guardian}}" placeholder="Guardian Name">
			  </div>
			  <div class="form-group">
			    <label for="county">County</label>
			    <input type="text" class="form-control" name="county" id="county" value="{{$child->county}}" placeholder="e.g,Meru County">
			  </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection