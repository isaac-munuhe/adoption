@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-warning">Fill all fields</h1>
            <hr>
        </div>
    </div>
<div class="container justify-content-center">
    <div class="card">
        <div class="card-header">Bio Info</div>
        <div class="card-body">
            <form action="{{ route ('adoptees.store') }}" method="post" class="needs-validation" novalidate>
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="idno">National ID</label>
                  <input type="text" min="8" max="8" class="form-control" id="idno" name="idno" placeholder="National ID" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" id="age" name="age" placeholder="age" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="address">Current Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="location">Location</label>
                  <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="marital">Marital Status</label>
                  <select id="marital" name="marital" class="form-control">
                    <option selected>Choose...</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option> 
                    <option value="Divorced">Divorced</option> 
                    <option value="Widowed">Widowed</option> 
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="reason">Reason</label>
                  <textarea class="form-control" id="reason" name="reason" placeholder="I am adopting this child..." required></textarea>
                </div>
              </div>
        </div>
    </div>
    <br><br>
    <hr class="m-2">
    <div class="card">
        <div class="card-header">Upload documents</div>
        <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="passport">ID/PASSPORT</label>
                          <input type="file" class="form-control-file" id="passport" name="passport" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="good_conduct">GOOD CONDUCT</label>
                          <input type="file" class="form-control-file" id="good_conduct" name="good_conduct" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bank">BANK STATEMENT</label>
                          <input type="file" class="form-control-file" id="bank" name="bank" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="marriage_cert">MARRIAGE CERTIFICATE</label>
                          <input type="file" class="form-control-file" id="marriage_cert" name="marriage_cert" required>
                    </div>
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection