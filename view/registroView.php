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
<div class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
    <img class="w3-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-pXiXeIuhTmZ-ZT0iqU61RZiVsAelLBNHD-Z6756AzAXa3FaEpCHWfctP-qzZbag6h10&usqp=CAU" alt="London" width="1500" height="700">
    <div class="w3-display-middle" style="width:65%">


        <!-- Tabs -->
        <div class="w3-container w3-white w3-padding-16 " >
            <h3 style="text-align: center">Registrarse</h3>
            <div class="w3-row-padding" style="margin:0 -16px;">
                <form action="/registro/registrar" method="post">
                    <p><input class="w3-input w3-padding-16 w3-border" name="nombre" type="text" placeholder="nombre de usuario" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="dni" type="number"  placeholder="dni" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="email" type="email" placeholder="email" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="fecha_nac" type="date" placeholder="fecha de nacimiento" ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="contra" type="password" placeholder="contraseña" ></p>
                    <p><button class="w3-button w3-black w3-padding-large" type="submit">registrarme</button></p>
                </form>

            </div>
        </div>

    </div>
</div>
{{> footer}}
