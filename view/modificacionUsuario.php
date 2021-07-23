{{> header}}

<div class="w3-bar w3-black ">
    <a href="/administrador/execute"  class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Home</a>
</div>


<div class="w3-centered">
    {{#usuarioDni}}
    <div class="w3-display-middle" style="width:65%">
        <div class=" w3-white w3-padding-16 " >
            <h3 style="text-align: center">MODIFICAR USUARIO:  {{nombre}}</h3>
            <form method="post" action="/administrador/modificarDatos/dni={{dni}}">
                <div class="w3-row-padding" style="margin:0 -16px;">
                    <p>EMAIL:<input class="w3-input w3-padding-16 w3-border" type="email" name="email" id="email" placeholder="{{email}}" value={{email}}></p>
                    <p>ROL:<select class="w3-input w3-padding-16 w3-border" name="roles" id="roles" >
                        <option value="{{rol}}"selected>{{rol}}</option>
                        <option value="1">Administrador</option>
                        <option value="2">Supervisor</option>
                        <option value="3">Mecanico</option>
                        <option value="4">Chofer</option>
                    </select></p>
                    <p><input class="w3-button w3-khaki w3-round-xlarge  w3-block" type="submit" value="Aceptar" ></p>
                </div>
                </div>
            </form>
        </div>
    </div>
    {{/usuarioDni}}
</div>


</form>