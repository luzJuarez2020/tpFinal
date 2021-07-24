<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h5 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image:url('https://images.unsplash.com/photo-1619252584172-a83a949b6efd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
<body>
<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
        Logo
    </div>
    <div class="w3-display-middle" style="width:65%">
        <!-- Tabs -->
        <div class="w3-container w3-white w3-padding-16 " style="background-color: black" >
            <h3 style="text-align: center">INICIA SESION</h3>
            <div class="w3-row-padding" style="margin:0 -16px;">
                <form action="/login/execute" method="post">
                    <label><b>Usuario</b></label>
                    <input name="usuario" class="w3-input w3-border" type="text" placeholder="Usuario"><br>
                    <label><b>Contraseña</b></label>
                    <input name="password" class="w3-input w3-border" type="password" placeholder="Contraseña">
                    <p><button class="w3-button w3-khaki w3-round-xlarge  w3-block" ><b>Ingresar</b></button></p>
                </form>
                <p><a href="/registro/execute" style="text-decoration: none"><button class="w3-button w3-khaki w3-round-xlarge  w3-block"><b>Registrarse</b></button></a></p>
            </div>
        </div>
    </div>
</div>






