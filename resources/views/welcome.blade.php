@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background: url('images/slide6.jpg') center no-repeat; margin-top: -2rem;">
  <div class="container">
    <h1 class="display-4 text-white">Rescue A Child!</h1>
      <p class="lead text-white">We are committed to facilitating the provision of a quality life to any child in need. We are geared towards bringing together people and community networks with positive, compassionate resolve and sensitivity to strengthen, protect, enlighten and ensure the rights of the child are upheld</p>
      <hr class="my-4 text-white">
      <p class="text-white">116 or 1195 are the hotlines to report during elections in case of violence to rescue children and also gender−based violence victims.</p>
      <a class="btn btn-primary btn-lg" href="{{url ('admin/children')}}" role="button">Adopt A Child</a>
  </div>
</div>

<div class="container">
    <div class="card-columns">
      <div class="card">
        <img class="card-img-top" src="{{asset ('images/slide2.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Our primary target is children aged between one and three years, but works towards a better life for children of all ages by promoting adoption locally and internationally and enhancing the capacities of communities to take care of their own children.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset ('images/slide6.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">We have focussed more on the promotion of adoption and fostering of HIV positive abandoned or neglected children by families locally and internationally.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset ('images/slide4.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">We are an initiative that was established out of concern of the plight of the increasing numbers of disadvantaged children in Kenya due to HIV/AIDS, abuse, neglect and abandonment.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset ('images/slide1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">We are registered as a Society as a fully-fledged organisation to address issues and concerns of children.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="{{asset ('images/slide3.jpg')}}" alt="Card image">
      </div>
      <div class="card">
        <div class="card-body">
          <p class="card-text">There are guidelines that ensure the Kenyan child is able to join a family while protecting every right of that child before, during and after the adoption process.</p>
          <a href="{{ url('guide') }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
</div>

@endsection