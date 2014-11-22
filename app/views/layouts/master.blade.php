<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    {{ HTML::style('css/app.css')}}
    {{ HTML::script('bower_components/modernizr/modernizr.js')}}


  </head>
  <body>


    @yield('content')
    



    {{ HTML::script('bower_components/jquery/dist/jquery.min.js')}}
    {{ HTML::script('bower_components/foundation/js/foundation.min.js')}}
    {{ HTML::script('js/app.js')}}



  </body>
</html>
