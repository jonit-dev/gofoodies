@extends('landing.layouts.master')

@push('customhead')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('css/restaurant.css')}}">
@endpush

@section('content')


    <div class="section-padding">


        <div class="restaurant-city-panel">

            <div class="container" style="height:15rem;">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12">


                        <div class="restaurant-city-header">
                            Vancouver
                        </div>
                        <div class="restaurant-city-subheader">
                            Vancouver
                        </div>


                    </div>
                </div>
            </div>


        </div>


    </div>

    <div class="restaurant-navbar">

        <div class="container">
            <div class="col-md-12">


                <!--Restaurant NavBar-->

                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-calendar restaurant-navbar-select-icon" aria-hidden="true"></i>
                        <select class="restaurant-navbar-select form-control" name="" id="">

                            <option selected>Qualquer Dia</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <i class="fa fa-clock-o restaurant-navbar-select-icon" aria-hidden="true"></i>
                        <select class="restaurant-navbar-select form-control" name="" id="">

                            <option selected>Qualquer Horário</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>


                    <div class="col-md-6">

                        <form action="#">


                            <div class="form-group">

                                    <input type="search" name="restaurant_keyword"
                                           placeholder="Type a restaurant name here...  "
                                           class="form-control restaurant-navbar-search">
                                    <button type="submit" class="btn btn-dark" style="display: inline-block; float:left;">Submit</button>

                            </div>

                        </form>


                    </div>




                </div>


            </div>
        </div>


    </div>


    <section class="section-padding">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1>[Restaurant List Here]</h1>


                </div>
            </div>
        </div>


    </section>


@endsection