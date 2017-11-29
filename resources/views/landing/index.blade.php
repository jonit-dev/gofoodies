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
                                    Search our restaurant list and find the one that best suit your needs.
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
                                    Appreciate many different cuisine types, at a fair price!
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

                    <h2><b>Eating out is no longer a luxury</b></h2>

                    <p>Awesome discounts to our members at restaurants of different types spread out throughout the
                        city. Eating out is no longer a luxury for the few!
                        <b>Quickly, you will recover the amount invested in your annuity</b>, enjoying quality food
                        while saving money.</p>

                    <hr>

                    <a class="btn btn-danger" href="{{route('register-user')}}">Create your Account</a>
                    <br><br>


                </div>
                <div class="col-md-6">

                    <img src="{{asset('gfx/landing/restaurant.jpg')}}" class="img-responsive rounded" width="100%"
                         height="90%"
                         alt="">

                </div>

            </div>
            <br>


        </div>
    </section>

    <section id="restaurants">

        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">
                    <h1 class="text-center">Featured Restaurants</h1>
                    <p class="text-center">Our premium associates</p>

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">

                    <div class="row justify-content-center align-items-center">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                        <img class="img-responsive rounded img-restaurant"
                             src="{{asset('gfx/landing/thumbnail/thumb-example.png')}}">
                    </div>

                </div>

            </div>


        </div>


    </section>


    <section id="when-to-use" style="margin-bottom: 0; padding-bottom: 2rem;" class="section-dark section-padding">

        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">


                    <h1 class="text-center">Every occasion</h1>
                    <p class="text-center">Friends, family or just chilling and appreciating the city</p>

                </div>
            </div>
            <br>

            <div class="row h-100 justify-content-center align-items-center">


                <div class="thumbnail text-center">
                    <img src="{{asset('gfx/landing/occasions/friends.jpg')}}" alt="" class="img-responsive rounded">
                    <div class="caption">
                        <p>HANGING OUT WITH YOUR FRIENDS</p>
                    </div>
                </div>


                <div class="thumbnail text-center">
                    <img src="{{asset('gfx/landing/occasions/chill.jpg')}}" alt="" class="img-responsive rounded">
                    <div class="caption">
                        <p>CHILLING OUTSIDE</p>
                    </div>
                </div>

                <div class="thumbnail text-center">
                    <img src="{{asset('gfx/landing/occasions/romantic.jpg')}}" alt="" class="img-responsive rounded">
                    <div class="caption">
                        <p>ROMANTIC DINNERS</p>
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


