@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">List of Adopters</h1>
            <hr>
        </div>
    </div>	
    <div class="container-fluid">
    	<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      
		      <th>Name</th>
		      <th>ID NUMBER</th>
		      <th>AGE</th>
		      <th>Marital</th>
		      <th>Location</th>
		      <th>Address</th>
		      <th>Passport</th>
		      <th>Good Conduct</th>
		      <th>Bank</th>
		      {{-- <th>Marriage Cert</th> --}}
		      <th>Child ID</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse($adoptees as $adoptee)
		    <tr>
		      <td>{{$adoptee->id}}</td>		      
		      <td>{{$adoptee->name}}</td>
		      <td>{{$adoptee->idno}}</td>
		      <td>{{$adoptee->age}}</td>
		      <td>{{$adoptee->marital}}</td>
		      <td>{{$adoptee->location}}</td>
		      <td>{{$adoptee->address}}</td>
		      <td>{{$adoptee->passport}}</td>
		      <td>{{$adoptee->good_conduct}}</td>
		      <td>{{$adoptee->bank}}</td>
		      {{-- <td>{{$adoptee->marriage_cert}}</td> --}}
		      <td>{{$adoptee->child_id}}</td>
		      <td><a href="#" class="btn btn-danger">Reject</a>
		      </td>
		      <td>
		      	<a href="#" class="btn btn-success">Approve</a>
		      </td>
		    </tr>
		    @empty
    		<p>No data found!</p>
		    @endforelse
		  </tbody>
		</table>
		{{-- <button type="button" class="btn btn-danger btn-lg pull-right" onclick="window.print();"> <span class="fa fa-print"></span> Print</button> --}}
    </div>
</div>
@endsection