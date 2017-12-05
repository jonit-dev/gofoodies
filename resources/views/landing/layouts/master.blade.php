<!doctype html>
<html lang="en" ng-app="goFoodies">
@include('landing.layouts.head')
<body>
@include('landing.layouts.navbar')


@yield('content')





@include('landing.layouts.footer')

@stack('customjs')
</body>
</html>


