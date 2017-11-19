@extends('landing.layouts.master')

@push('customhead')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

@section("content")


        <section class="parallax">

            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12">


                        <h1 class="panel-text text-center">
                            Discover your new Home
                        </h1>
                        <p class="panel-subtext text-center">Just before your Move!</p>

                        <center>
                            <button class="btn btn-danger">Create Your Account</button>
                        </center>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--Scroll down icon-->
                        <div class="scroll-downs">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="section-padding" id="howitworks">
            <div class="container">
                <div class="row justify-content-md-start align-items-start">
                    <div class="col-md-12">


                        <h1 class="text-center">How it Works?</h1>
                        <p class="text-center">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
                            consequat.</p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <div class="card"  >
                            <div class="card-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                            <div class="card-body">
                                <h4 class="card-title">Select Properties Visiting</h4>
                                <p class="card-text">
                                    Prepare a list of property or even neighborhoods for visiting, so our freelancers could
                                    give you their offers
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-4">

                        <div class="card"  >
                            <div class="card-icon"><i class="fa fa-binoculars" aria-hidden="true"></i></div>
                            <div class="card-body">
                                <h4 class="card-title">Select a Freelancer</h4>
                                <p class="card-text">
                                    Decide among many offers which one best fits your needs
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-icon"><i class="fa fa-binoculars" aria-hidden="true"></i></div>
                            <div class="card-body">
                                <h4 class="card-title">Select a Freelancer</h4>
                                <p class="card-text">
                                    Decide among many offers which one best fits your needs
                                </p>
                            </div>
                        </div>


                    </div>


                </div>
                <br>


            </div>
        </section>


        <section id="latest-projects">

            <div class="container ">
                <div class="row justify-content-md-start align-items-start">
                    <div class="col-md-12">


                        <h1 class="text-center">Center Me!</h1>
                        <p class="text-center">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
                            consequat.</p>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4">

                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home1.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Yaletown Apt</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home2.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Downtown Condo</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home3.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Burnaby House</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </section>




@endsection

@push('customjs')


@endpush


