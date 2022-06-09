
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- ...Head... -->
    @include('backend.includes.head')

    <!-- ...css... -->
    @include('backend.includes.css')
    
  </head>

  <body>

    <!-- ...Side bar... -->
    @include('backend.includes.sidebar')

      <!-- ...Top bar... -->
      @include('backend.includes.topbar')

    <!-- ... Right bar... -->
    @include('backend.includes.rightbar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

    	@yield('content')
      
      <!-- ...footer... -->
      @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 

      <!-- ...scripts... -->
      @include('backend.includes.scripts')

    
  </body>
</html>
