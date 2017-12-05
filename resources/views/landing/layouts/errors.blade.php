@if(isset($errors) && count($errors) > 0)

    <div class="alert alert-danger">
        <strong>Ooops! </strong><br><br>
        @foreach($errors->all() as $error)

            <i>{{$error}}</i>
            <br>


        @endforeach
        <br>
        <strong>Please, try again</strong>

    </div>

@endif



