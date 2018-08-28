@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-warning">Fill all fields</h1>
            <hr>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="/storage/photos/{{ $child->image }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>NAME:</b><span class="badge badge-primary">{{$child->fname}} {{$child->lname}} </span></h5>
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
      <div class="col-md-8">
        <div class="card border-success mb-3">
          <div class="card-header bg-success"><h4>Government Law on Adoption</h4></div>
          <div class="card-body">
            <p>
              Both the Constitution and the Children’s Act are instructive in matters of child adoption in Kenya. In any matter concerning a child, the child’s best interests are of paramount importance as set out under Article 53 (2) of the Constitution
              Section 4 of the Children’s Act also stipulates that in all actions concerning children whether undertaken by public or private social welfare institutions, courts of law, administrative authorities or legislative bodies, the best interests of the child shall be a primary consideration. <br>

              While it is notable that the law ranks the child’s best interests very highly it is arguable that there is leeway created in the wording allowing for the child’s interest to be balanced against other factors being considered by the court. In any event, the child’s best interests are a major concern to the court seized with the question of a child’s adoption.
              The High Court is vested with the jurisdiction to make adoption orders pursuant to Section 154 of the Children’s Act. Children matters are heard in chambers for purposes of protecting the identity of the child and that of the adoptive parent(s
            </p>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container justify-content-center">
        <div class="card">
            <div class="card-header">Bio Info</div>
            <div class="card-body">
                <form action="{{ route ('adoptees.store', $child['id']) }}" method="post" class="needs-validation" novalidate>
                  @csrf

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group ">
                        <label>Child's Name *</label>
                        <input type="text" name="" class="form-control" value="{{$child->fname}} {{$child->lname}}">
                        <input type="hidden" name="child_id" class="form-control" value="{{$child->id}}">
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
                  <button type="submit" class="btn btn-primary">Adopt</button>
                </form>
            </div>
        </div>
    </div>
@endsection