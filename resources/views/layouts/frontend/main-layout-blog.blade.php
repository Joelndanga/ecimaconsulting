<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreethemes.in/starty/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2022 10:11:25 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>ECIMA CONSULTING - @yield('title')</title>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')


</head>

<body>

@include('layouts.frontend.navbar-blog')

@yield('content')

@include('layouts.frontend.footer')
@include('layouts.frontend.scripts')
</body>
</html>

