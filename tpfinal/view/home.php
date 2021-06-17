<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size: 16px;}
    img {margin-bottom: -8px;}
    .mySlides {display: none;}
</style>
<body class="w3-content w3-black" style="max-width:1800px;">

<!-- Header with Slideshow -->
<header class="w3-display-container w3-center">
    <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Ingresar</i></button>
    <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" >registrarse</i></button>
    <div class="mySlides w3-animate-opacity">
        <img class="w3-image" src="imagenes/1.png" alt="Image 1" style="min-width:500px" width="1500" height="1000">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge">Transportes la matanza</h1>
                <hr class="w3-opacity">
                    <a href="registro.php" style="text-decoration: none"><button class="w3-button w3-block w3-indigo w3-round">registrarse</button></a>
                <p><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Ingresar</button></p>
            </div>
        </div>
    </div>
    <div class="mySlides w3-animate-opacity">
        <img class="w3-image" src="imagenes/2.png" alt="Image 2" style="min-width:500px" width="1500" height="1000">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge w3-text-red">Transportes la matanza</h1>
                <hr class="w3-opacity">
                <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('record').style.display='block'">registrarse</button></p>
                <p><button class="w3-button w3-block w3-red w3-round" onclick="document.getElementById('download').style.display='block'">Ingresar </button></p>
            </div>
        </div>
    </div>
    <div class="mySlides w3-animate-opacity">
        <img class="w3-image" src="imagenes/3.png" alt="Image 3" style="min-width:500px" width="1500" height="1000">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:40%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge">Transportes la matanza</h1>
                <hr class="w3-opacity">
                <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('record').style.display='block'">registrarse</button></p>
                <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('download').style.display='block'"> Ingresar</button></p>
            </div>
        </div>
    </div>
    <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)"><i class="fa fa-angle-right"></i></a>
    <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)"><i class="fa fa-angle-right"></i></a>
</header>

<!-- sobre nosotros -->
<div class="w3-padding-64 w3-white">
    <div class="w3-row-padding">
        <div class="w3-col l8 m6">
            <h1 class="w3-jumbo"><b>Nosotros</b></h1>
            <h1 class="w3-xxxlarge w3-text-green"><b>x</b></h1>
            <p><span class="w3-xlarge">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>

<!-- ventanas emergentes -->
<div id="download" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content" style="padding:32px">
        <div class="w3-container w3-white">
            <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
            <h2 class="w3-wide">Usuario</h2>
            <form action="../model/homeInfo.php" method="post" >
            <input  id="usuario" name="usuario" class="w3-input w3-border" type="text" placeholder="usuario" >
                <input id="contra" name="contra" class="w3-input w3-border" type="password" placeholder="contraseña">
                <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">ingresar</button>
            </form>
        </div>
    </div>
</div>

<div id="record" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content" style="padding:32px">
        <div class="w3-container w3-white">
            <i onclick="document.getElementById('record').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
            <h2 class="w3-wide">Datos registro</h2>
            <form action="homeInfo" method="post" name="logueo">
                <p><input class="w3-input w3-border" type="text" placeholder="mail"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="usuario"></p>
                <p><input class="w3-input w3-border" type="password" placeholder="contraseña"></p>
                <p><input class="w3-input w3-border" type="password" placeholder="repetir contraseña"></p>
                <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">registrarse</button>
            </form>
        </div>
    </div>
</div>

<!--nuestros transportes -->
<div class="w3-padding-64 w3-light-grey">
    <div class="w3-row-padding">
        <div class="w3-col l4 m6">
            <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="/w3images/app5.jpg" alt="App" width="335" height="471">
        </div>
        <div class="w3-col l8 m6">
            <h1 class="w3-jumbo"><b>Nuestros transportes</b></h1>
            <h1 class="w3-xxxlarge w3-text-red"><b>Pixels, who?</b></h1>
            <p><span class="w3-xlarge">A revolution in resolution.</span> Sharp and clear photos with the world's best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>


<!-- Pricing Section -->
<?php
/*<div class="w3-padding-64 w3-center w3-white">
    <h1 class="w3-jumbo"><b>Pricing</b></h1>
    <p class="w3-large">Choose a pricing plan that fits your needs.</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half w3-section">
            <ul class="w3-ul w3-card w3-hover-shadow">
                <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
                <li class="w3-padding-16"><b>250</b> Photos</li>
                <li class="w3-padding-16"><b>10</b> Features</li>
                <li class="w3-padding-16"><b>No</b> Ads</li>
                <li class="w3-padding-16"><b>Office hours</b> Support</li>
                <li class="w3-padding-16">
                    <h2 class="w3-opacity">$ 25</h2>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button class="w3-button w3-black w3-padding-large" onclick="document.getElementById('download').style.display='block'"><i class="fa fa-download"></i> Download</button>
                </li>
            </ul>
        </div>
        <div class="w3-half w3-section">
            <ul class="w3-ul w3-card w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-32">Premium</li>
                <li class="w3-padding-16"><b>1000</b> Photos</li>
                <li class="w3-padding-16"><b>50</b> Features</li>
                <li class="w3-padding-16"><b>No</b> Ads</li>
                <li class="w3-padding-16"><b>Endless</b> Support</li>
                <li class="w3-padding-16">
                    <h2 class="w3-opacity">$ 99</h2>
                </li>
                <li class="w3-light-grey w3-padding-24">
                    <button class="w3-button w3-black w3-padding-large" onclick="document.getElementById('download').style.display='block'"> <i class="fa fa-download"></i> Download</button>
                </li>
            </ul>
        </div>
    </div>
    <br>
</div>*/
?>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
    <div class="w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</footer>

<script>
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>

</body>
</html>
