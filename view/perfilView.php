{{> header }}
{{> barra }}

<div class="w3-content w3-padding-large w3-margin-top">
    <div class="w3-container w3-white w3-padding-16 ">
        <div>
        <h1 style="display: inline"> Datos Personales</h1>
            <i class="fa fa-user" aria-hidden="true" style="font-size: 40px;padding: 25px"></i>
        </div>
        <hr style="height:2px;width:300px;background-color: black">
        <br>

        {{#user}}
        <h2>Nombre de usuario: {{nombre}}</h2>
        <h2>DNI: {{dni}}</h2>
        <h2>EMAIL: {{email}}</h2>
        <h2>Fecha de nacimiento: {{fecha_nac}}</h2>
        {{/user}}

        {{#userChofer}}
        <form action="/chofer/cargarLicencia/dni={{dni_usuario}}" method="post">
            <p>Licencia<input class="w3-input w3-padding-16 w3-border" type="number" name="nroLicencia" placeholder="ingrese numero de licencia"></p>
            <p><input class="w3-button w3-khaki w3-round-xlarge  w3-block" type="submit" value="Aceptar" ></p>
        </form>
        {{/userChofer}}

    </div>
</div>




