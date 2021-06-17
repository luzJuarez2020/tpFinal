<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">


<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
    <a href="#" class="w3-bar-item w3-button w3-red w3-mobile">Logo</a>
</div>
<!-- Header -->


<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">



    <div class="w3-container" id="contact">
        <h2>Registrarse</h2>
        <form action="" method="post">
            <p><input class="w3-input w3-padding-16 w3-border" name="nombre" type="text" placeholder="nombre" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="apellido" type="text" placeholder="apellido" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="dni" type="number" placeholder="dni" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="email" type="email" placeholder="email" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="contra" type="password" placeholder="contraseña" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="contra2" type="password" placeholder="repetir contraseña" ></p>
            <p><button class="w3-button w3-black w3-padding-large" type="submit">registrarme</button></p>
        </form>
    </div>

    <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top" >
    <h5>Encontranos</h5>
    <div class="w3-xlarge w3-padding-16">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
    </div>
</footer>


<!-- Add Google Maps -->
<script>
    function myMap() {
        myCenter=new google.maps.LatLng(41.878114, -87.629798);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


</body>
</html>

