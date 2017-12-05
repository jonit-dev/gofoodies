@extends('landing.layouts.master')

@push('customhead')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

@section('content')
    <section id="register-user" class="internal-page">
        <div class="container">
            <div class="row justify-content-md-start align-items-start">
                <div class="col-md-12">


                    <h1 class="text-center">Create your Account</h1>
                    <p class="text-center">And join our exclusive club right now!</p>

                </div>
            </div>

           <div class="row">
               <div class="col-md-12">

                   <form lpformnum="1">
                       <fieldset>
                           <legend>Legend</legend>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Email address</label>
                               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword1">Password</label>
                               <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                           </div>
                           <div class="form-group">
                               <label for="exampleSelect1">Example select</label>
                               <select class="form-control" id="exampleSelect1">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="exampleSelect2">Example multiple select</label>
                               <select multiple="" class="form-control" id="exampleSelect2">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option>
                                   <option>4</option>
                                   <option>5</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="exampleTextarea">Example textarea</label>
                               <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputFile">File input</label>
                               <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                               <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                           </div>
                           <fieldset class="form-group">
                               <legend>Radio buttons</legend>
                               <div class="form-check">
                                   <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                       Option one is this and that—be sure to include why it's great
                                   </label>
                               </div>
                               <div class="form-check">
                                   <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                       Option two can be something else and selecting it will deselect option one
                                   </label>
                               </div>
                               <div class="form-check disabled">
                                   <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                       Option three is disabled
                                   </label>
                               </div>
                           </fieldset>
                           <div class="form-check">
                               <label class="form-check-label">
                                   <input type="checkbox" class="form-check-input">
                                   Check me out
                               </label>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </fieldset>
                   </form>


               </div>
           </div>


        </div>
    </section>


    @endsection