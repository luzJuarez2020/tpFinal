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
        <form action="../controller/prueba.php" method="post">
            <p><input class="w3-input w3-padding-16 w3-border" name="nombre" type="text" placeholder="nombre de usuario" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="dni" type="number"  placeholder="dni" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="email" type="email" placeholder="email" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="fecha_nac" type="date" placeholder="fecha de nacimiento" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="contra" type="password" placeholder="contraseña" ></p>
            <p><input class="w3-input w3-padding-16 w3-border" name="contra2" type="password" placeholder="repetir contraseña" ></p>
            <p><button class="w3-button w3-black w3-padding-large" type="submit">registrarme</button></p>
        </form>
    </div>

    <!-- End page content -->
</div>

</body>
</html>

