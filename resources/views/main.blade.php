<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    <!-- @yield('title') -->
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      @yield('heading')
      @yield('body')
  
    @include('partials._script')

    <hr>
          <p class="text-center">Copyrights MNNIT - All Rights Reserved</p>
  </body>
</html>
