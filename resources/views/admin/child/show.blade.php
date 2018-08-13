@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Child Info</h1>
            <hr>
        </div>
    </div>
    <div class="container">
	    <div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('images/avatar.png')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"><b>NAME:</b><span class="badge badge-primary">{{$child->name}}</span></h5>
		    <p class="card-text">Other Details</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item"><b>DATE-OF-BIRTH:</b><span class="badge badge-info">{{$child->dob}}</span></li>
		    <li class="list-group-item"><b>GENDER:</b><span class="badge badge-info">{{$child->gender}}</span></li>
		    <li class="list-group-item"><b>GUARDIAN:</b><span class="badge badge-info">{{$child->guardian}}</span></li>
		    <li class="list-group-item"><b>COUNTY:</b><span class="badge badge-info">{{$child->county}}</span></li>
		  </ul>
		</div>
    </div>
@endsection