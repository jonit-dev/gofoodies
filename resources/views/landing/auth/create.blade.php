@extends('landing.layouts.master')

@push('customhead')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

@section('content')
    <section id="register-user" class="internal-page" ng-controller="CreateAccountCtrl">
        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">


                    <h1 class="text-center">Create your Account</h1>
                    <p class="text-center">And join our exclusive club right now!</p>

                </div>
            </div>

           <div class="row">
               <div class="col-md-12">

                   <form action="{{route('create-account')}}" method="post">

                       {{csrf_field()}}

                       @include('landing.layouts.alerts')
                       @include('landing.layouts.errors')

                       <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" name="user_name" id="name" placeholder="Your Full Name"
                                  autocomplete="off">
                       </div>

                       <div class="form-group">
                           <label for="email">Email address</label>
                           <input type="email" class="form-control" id="email" name="user_email" aria-describedby="emailHelp"
                                  placeholder="Enter email" autocomplete="off">
                               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                      autocomplete="off">
                           </div>

                       <div class="form-group">
                           <label for="password2">Password again</label>
                           <input type="password" class="form-control" id="password2" name="password_confirmation"
                                  placeholder="Type your password again" autocomplete="off">
                       </div>
                           <div class="form-group">
                               <label for="province">Province</label>
                               <select class="form-control" id="province_id" name="user_province"
                                       ng-init="loadProvinces()"
                                       ng-options="province as province.name for province in provinces track by province.id"
                                       ng-model="user.province"
                                        ng-change="loadCities(user.province.abbrev)"
                               >
                               </select>
                           </div>

                       <div class="form-group">
                           <label for="province">City</label>
                           <select class="form-control" id="city_id" name="user_city"
                                   ng-options="city as city.city for city in cities track by city.id"
                                   ng-model="user.city">
                           </select>
                       </div>



                       {{----}}
                       {{--<div class="form-group">--}}
                       {{--<label for="exampleSelect2">Example multiple select</label>--}}
                       {{--<select multiple="" class="form-control" id="exampleSelect2">--}}
                       {{--<option>1</option>--}}
                       {{--<option>2</option>--}}
                       {{--<option>3</option>--}}
                       {{--<option>4</option>--}}
                       {{--<option>5</option>--}}
                       {{--</select>--}}
                       {{--</div>--}}
                       {{--<div class="form-group">--}}
                       {{--<label for="exampleTextarea">Example textarea</label>--}}
                       {{--<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>--}}
                       {{--</div>--}}
                       {{--<div class="form-group">--}}
                       {{--<label for="exampleInputFile">File input</label>--}}
                       {{--<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">--}}
                       {{--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>--}}
                       {{--</div>--}}
                       {{--<fieldset class="form-group">--}}
                       {{--<legend>Radio buttons</legend>--}}
                       {{--<div class="form-check">--}}
                       {{--<label class="form-check-label">--}}
                       {{--<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">--}}
                       {{--Option one is this and that—be sure to include why it's great--}}
                       {{--</label>--}}
                       {{--</div>--}}
                       {{--<div class="form-check">--}}
                       {{--<label class="form-check-label">--}}
                       {{--<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">--}}
                       {{--Option two can be something else and selecting it will deselect option one--}}
                       {{--</label>--}}
                       {{--</div>--}}
                       {{--<div class="form-check disabled">--}}
                       {{--<label class="form-check-label">--}}
                       {{--<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">--}}
                       {{--Option three is disabled--}}
                       {{--</label>--}}
                       {{--</div>--}}
                       {{--</fieldset>--}}
                       {{--<div class="form-check">--}}
                       {{--<label class="form-check-label">--}}
                       {{--<input type="checkbox" class="form-check-input">--}}
                       {{--Check me out--}}
                       {{--</label>--}}
                       {{--</div>--}}



                           <button type="submit" class="btn btn-primary">Create Your Account</button>



                   </form>


               </div>
           </div>


        </div>
    </section>


    @endsection


@push('customjs')
    <script src="{{asset('angular/controllers/createAccountCtrl.js')}}"></script>
@endpush