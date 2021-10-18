<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viaja por el mundo - Actividades</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- custom CSS -->
        <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />

        <!-- custom js-->
        <script src="{{ asset('assets/script.js') }}"></script>

    </head>
    <body>
        @include('header')
        <div class="container">
            @yield('content')
        </div>
        @include('footer')

    </body>

    <script type="text/javascript">
   $( function() {

$( "#datepicker" ).datepicker({
  firstDay: 1,
  minDate:0,
  dateFormat: 'dd-mm-yy'
});

  } );
    </script>    

</html>
