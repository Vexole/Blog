<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>

@include('partials._navbar')

  <div class="container">
  	@include('partials._messages') 
     

     @yield('content')

@include('partials._footer')
  @yield('javascript')
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
 
  </div> 

@include('partials._javascript')

    
  </body>
</html>