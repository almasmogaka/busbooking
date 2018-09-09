 
<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('partials.head')
 
 </head>
 
 <body>
 
@include('partials.nav')
 
@yield('content')
 
@include('partials.footer')
 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
 </body>
 
</html>