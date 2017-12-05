@if(session()->get('error'))
    <div class="alert alert-danger">


        <p><b>   <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Oops!</b></p>
    <p>    {!! session()->get('error') !!} </p>
        <p><b>Please, try again!</b></p>

    </div>
@endif

@if(session()->get('success'))
    <div class="alert alert-success">

        <i class="fa fa-check" aria-hidden="true"></i>

        {!! session()->get('success') !!}
    </div>
@endif




{{--@if(isset($msg))--}}
    {{----}}
     {{----}}
    {{----}}

    {{--@if($msg['type'] == 'success')--}}
        {{--<div class="alert alert-success">--}}
            {{--{!! $msg['msg'] !!}--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--@if($msg['type'] == 'error')--}}
        {{--<div class="alert alert-danger">--}}
            {{--<strong>Ooops! </strong><br><br>--}}
            {{--{!! $msg['msg'] !!}--}}
            {{--<br><br>--}}
            {{--<p><strong>Please, try again</strong></p>--}}

        {{--</div>--}}
    {{--@endif--}}

    {{--@if($msg['type'] == 'information')--}}
        {{--<div class="alert alert-info">--}}
            {{--{!! $msg['msg'] !!}--}}
                 {{--</div>--}}
    {{--@endif--}}

    {{--@if($msg['type'] == 'warning')--}}
        {{--<div class="alert alert-warning">--}}
            {{--{!! $msg['msg'] !!}--}}
        {{--</div>--}}
    {{--@endif--}}





{{--@endif--}}