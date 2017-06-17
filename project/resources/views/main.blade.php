<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>

    @include('partials._nav')    

    <div class="container">
        <div class="shadowbody container">
            @include('partials._messages')

            @yield('content')

            {{-- @include('partials._footer') --}}
        </div>
    </div> <!-- end of .container --> 
        @include('partials._footer')
        
        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>
