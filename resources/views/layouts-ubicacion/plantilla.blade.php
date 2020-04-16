
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Vida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('app-assets/css/cuerpo.css')}}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="{{asset('app-assets/imagenes/nv.ico')}}" type="image/x-icon">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{asset('app-assets/js/gmaps.js')}}"></script>
    @mapstyles
</head>

<body style="background-color:#f4f4f4;">


    @include("layouts.navbar")
    @yield("navbar")
    
    <div style="padding-top: 60px;">
      @include("layouts-ubicacion.map")
      @yield("mapa")
    <</div>
    
    

    <!-- <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyClJTn8n6v-jGJf1HSMBBTH6U_jdSe_G4A'></script> -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClJTn8n6v-jGJf1HSMBBTH6U_jdSe_G4A&callback=initMap" type="text/javascript"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> -->
    <!-- <script src="http://maps.google.com/maps/api/js"></script> -->
    <!-- <script src="{{asset('app-assets/js/gmaps.js')}}"></script> -->
    <!-- <script>
      var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
      });
  </script> -->
  @mapscripts
</body>
</html>