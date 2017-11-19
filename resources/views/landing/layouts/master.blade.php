<!doctype html>
<html lang="en">
@include('landing.layouts.head')
<body>
@include('landing.layouts.navbar')


@yield('content')



@stack('customjs')


@include('landing.layouts.footer')
</body>
</html>


