{{> header}}
<div class="w3-bar w3-black ">
    <a href="/administrador/execute"  class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 3</a>
</div>
<h2>ROL</h2>

<h2>{{dni}}</h2>

<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-middle " style="width:65%">
        <div class="w3-container w3-white w3-padding-16 " >
            <h3 style="text-align: center">Registrarse</h3>
            <div class="w3-row-padding" style="margin:0 -16px;">
                <form action="/administrador/modificarRol/dni={{dni}}" method="post">
                    <p><select name="roles">
                            <option value="1">chofer</option>
                            <option value="2">supervisor</option>
                            <option value="3">encargado</option>
                            <option value="4">administrador</option>
                        </select></p>
                    <p><button class="w3-button w3-khaki w3-round-xlarge  w3-block" type="submit"><b>Registrarme</b></button></p>
                </form>
            </div>
        </div>
    </div>
</div>


</form>