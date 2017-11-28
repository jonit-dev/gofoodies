@extends('landing.layouts.master')

@push('customhead')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

@section("content")


    <section class="parallax" style="height:100%;">

            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12">


                        <h1 class="panel-text text-center">
                          <span class="calltoaction"></span><div class="typed-cursor"></div>
                        </h1>
                        <p class="panel-subtext text-center">Only hand-picked restaurants in your region</p>

                        <center>
                            <a class="btn btn-danger" href="{{route('register-user')}}">Create Your Account</a>
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
                        <p class="text-center">Avoid overspending in your favorite restaurants</p>

                    </div>
                </div>

                <div class="row">


                    <div class="col-md-3">

                        <div class="card card-without-border">
                            <div class="card-icon">
                                <img src="{{asset('gfx/landing/icons/member.png')}}" class="img-responsive center-block"
                                     width="40%" height="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Join our Membership program</h4>
                                <p class="card-text">
                                    For a small annual fee you can join our club and start enjoying all of your
                                    restaurant discounts.
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-3">

                        <div class="card card-without-border">
                            <div class="card-icon">
                                <img src="{{asset('gfx/landing/icons/find-restaurant.png')}}"
                                     class="img-responsive center-block" width="40%" height="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Find an associated Restaurant</h4>
                                <p class="card-text">
                                    For a small annual fee you can join our club and start enjoying all of your
                                    restaurant discounts.
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-3">

                        <div class="card card-without-border">
                            <div class="card-icon">
                                <img src="{{asset('gfx/landing/icons/show-id.png')}}" class="img-responsive center-block"
                                     width="40%" height="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Show your Identification</h4>
                                <p class="card-text">
                                    As soon as you arrive in the associated restaurant, show you SIN number to the waiter or manager.
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-3">

                        <div class="card card-without-border">
                            <div class="card-icon">
                                <img src="{{asset('gfx/landing/icons/enjoy.png')}}"
                                     class="img-responsive center-block" width="40%" height="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Enjoy your Meal</h4>
                                <p class="card-text">
                                    Find out all of the different cuisines that our associated restaurants offers
                                </p>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </section>

    <section class="section-padding section-dark" id="benefits">
        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">


                    <h1 class="text-center">Why be a Member?</h1>
                    <p class="text-center">Check our main benefits</p>

                </div>
            </div>

            <br>

            <div class="row">

                <div class="col-md-6">

                    <h2><b>Avoid Scams of Online Real Estate Ads</b></h2>

                    <p>Before commiting to any contract to rent a property overseas (and even in another cities), hire
                        our trusted freelancers
                        to take a look at it, chat with the landlord, give opinions and tips about the neighborhood and,
                        mainly,
                        provide you with videos and pictures that proofs that the <b>real estate really exists</b></p>

                </div>
                <div class="col-md-6">

                    <img src="{{asset('gfx/landing/house.jpg')}}" class="img-responsive" width="100%" height="100%"
                         alt="">

                </div>

            </div>
            <br>


        </div>
    </section>

    <section id="latest-freelancers">

        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">


                    <h1 class="text-center">Latest Freelancers</h1>
                    <p class="text-center">Take a Look At Our Trusted Freelancers</p>

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">

                    <div class="card card-without-border">
                        <img class="card-img-top rounded-circle "
                             src="{{asset('gfx/landing/freelancers/freelancer1.png')}}" alt="Card image cap">
                        <div class="card-body">

                            <h4 class="card-title">Noah Jones
                                <div class="star">
                                    <img src="{{asset('gfx/rating/non-star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>

                            </h4>
                            <p class="card-text">

                            <ul class="rating-list">
                                <li>
                                    <i class="fa fa-compass rating-font" aria-hidden="true"></i>
                                    <div class="rating-item"><b>Completed Jobs:</b> 39</div>
                                </li>
                                <li>
                                    <i class="fa fa-camera-retro" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Pictures</b></div>
                                </li>


                            </ul>


                            </p>

                        </div>
                    </div>


                </div>

                <div class="col-md-3">

                    <div class="card card-without-border">
                        <img class="card-img-top rounded-circle "
                             src="{{asset('gfx/landing/freelancers/freelancer2.png')}}" alt="Card image cap">
                        <div class="card-body">

                            <h4 class="card-title">Sarah Cristina
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                            </h4>
                            <p class="card-text">

                            <ul class="rating-list">
                                <li>
                                    <i class="fa fa-compass rating-font" aria-hidden="true"></i>
                                    <div class="rating-item"><b>Visited Properties:</b> 17</div>
                                </li>
                                <li>
                                    <i class="fa fa-camera-retro" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Pictures</b></div>
                                </li>
                                <li>
                                    <i class="fa fa-video-camera" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Video</b></div>
                                </li>

                            </ul>


                            </p>

                        </div>
                    </div>


                </div>

                <div class="col-md-3">

                    <div class="card card-without-border">
                        <img class="card-img-top rounded-circle "
                             src="{{asset('gfx/landing/freelancers/freelancer3.png')}}" alt="Card image cap">
                        <div class="card-body">

                            <h4 class="card-title">João Paulo

                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>

                            </h4>
                            <p class="card-text">

                            <ul class="rating-list">
                                <li>
                                    <i class="fa fa-compass rating-font" aria-hidden="true"></i>
                                    <div class="rating-item"><b>Visited Properties:</b> 20</div>
                                </li>
                                <li>
                                    <i class="fa fa-camera-retro" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Pictures</b></div>
                                </li>
                                <li>
                                    <i class="fa fa-video-camera" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Video</b></div>
                                </li>

                            </ul>


                            </p>

                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card card-without-border">
                        <img class="card-img-top rounded-circle "
                             src="{{asset('gfx/landing/freelancers/freelancer3.png')}}" alt="Card image cap">
                        <div class="card-body">

                            <h4 class="card-title">João Paulo

                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>
                                <div class="star">
                                    <img src="{{asset('gfx/rating/star.png')}}" alt="">
                                </div>

                            </h4>
                            <p class="card-text">

                            <ul class="rating-list">
                                <li>
                                    <i class="fa fa-compass rating-font" aria-hidden="true"></i>
                                    <div class="rating-item"><b>Visited Properties:</b> 20</div>
                                </li>
                                <li>
                                    <i class="fa fa-camera-retro" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Pictures</b></div>
                                </li>
                                <li>
                                    <i class="fa fa-video-camera" style="font-size:1rem;" aria-hidden="true"></i>
                                    <div style=" margin-top:-1.4rem;
    margin-left:1.3rem;"><b>Video</b></div>
                                </li>

                            </ul>


                            </p>

                        </div>
                    </div>


                </div>


            </div>


    </section>



        <section id="latest-projects">

            <div class="container">
                <div class="row justify-content-md-start align-items-start">
                    <div class="col-md-12">


                        <h1 class="text-center">Latest Visits</h1>
                        <p class="text-center">See what our freelancers visited recently</p>

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4">

                        <div class="card">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home1.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Yaletown Apt</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>

                            </div>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home2.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Downtown Condo</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('gfx/landing/homes/home3.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Burnaby House</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </section>




@endsection

@push('customjs')

    <script src="{{asset('bower_components/typed.js/lib/typed.min.js')}}"></script>

    <script type="text/javascript">
        var options = {
            strings: ["Save from 30-50% in Restaurants^2000\n", "Join our exclusive Membership", "Eat more, spend less"],
            typeSpeed: 80,
            backSpeed: 40,
            showCursor: true,
            cursorChar: '|',
            autoInsertCss: true,
        };

        var typed = new Typed(".calltoaction", options);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="{{asset('js/landing.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script>


@endpush


