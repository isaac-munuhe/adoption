@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">List of Adopters</h1>
            <hr>
        </div>
    </div>	
    <div class="container">
    	<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      
		      <th scope="col">NAME</th>
		      <th scope="col">ID NUMBER</th>
		      <th scope="col">AGE</th>
		      <th scope="col">MARITAL STATUS</th>
		      <th scope="col">LOCATION</th>
		      <th scope="col">ADDRESS</th>
		      <th scope="col">PASSPORT</th>
		      <th scope="col">GOOD CONDUCT</th>
		      <th scope="col">BANK STATEMENT</th>
		      <th scope="col">MARRIAGE CERTIFICATE</th>
		      <th scope="col">CHILD ID</th>
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
		      <td>{{$adoptee->marriage_cert}}</td>
		      <td>{{$adoptee->child_id}}</td>
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