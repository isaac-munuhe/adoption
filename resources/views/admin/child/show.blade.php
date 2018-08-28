@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Child Info</h1>
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
				    <li class="list-group-item"><a class="btn btn-primary" href="{{ route('adopt', $child['id'])}}">ADOPT</a></li>
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
    </div>
@endsection