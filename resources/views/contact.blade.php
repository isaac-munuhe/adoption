@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background: url('images/slide6.jpg') center no-repeat; margin-top: -2rem;">
	<div class="container">
	<h1 class="display-4 text-white">Contact Us</h1>
	</div>
</div>

<section class="container">

    <!--Contact heading-->
    <h2 class="h1 m-0">Contact us</h2>
    <!--Contact description-->
    <p class="pb-4">Reach out to us using the contacts provided below.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                        <p class="m-0">We'll write rarely, but only the best content.</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <label>Your name</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Service</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                    </div>

                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div class="mb-4">
               
            </div>

            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Hall Street,96-90400, Nairobi<br> Kenya</p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+254 717503802, <br> Mon - Fri, 8:00-22:00</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>info@adoption.gmail.com <br> help@adoption.gmail.com</p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
@endsection