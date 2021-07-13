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
    <div class="w3-display-middle " style="width:65%">
        <div class="w3-container w3-white w3-padding-16 " >
            <h3 style="text-align: center">Registrarse</h3>
            <div class="w3-row-padding" style="margin:0 -16px;">
                <form action="/registro/registrar" method="post">
                    <p><input class="w3-input w3-padding-16 w3-border" name="nombre" type="text" placeholder="nombre de usuario" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="dni" type="number"  placeholder="dni" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="email" type="email" placeholder="email" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="fecha_nac" type="date" placeholder="fecha de nacimiento" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="contra" type="password" placeholder="contraseña" ></p>
                    <p><button class="w3-button w3-khaki w3-round-xlarge  w3-block" type="submit"><b>Registrarme</b></button></p>
                </form>

            </div>
        </div>
    </div>
</div>
{{> footer}}


