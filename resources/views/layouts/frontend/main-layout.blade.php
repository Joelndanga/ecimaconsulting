<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreethemes.in/starty/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2022 10:11:25 GMT -->
<head>
    <meta charset="utf-8" />
    <title>ECIMA CONSULTING - @yield('title')</title>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')

   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179032198-1"></script>
  <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-179032198-1');
 </script>

<meta name="facebook-domain-verification" content="ccumkcipl6kv4dxtsq7nz43qpwwuay" />


</head>

<body>

    @include('layouts.frontend.navbar')

        @yield('content')

    @include('layouts.frontend.footer')
    @include('layouts.frontend.scripts')
</body>
</html>

		