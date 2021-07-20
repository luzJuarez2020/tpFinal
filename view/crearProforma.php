{{> header}}


    <div class="w3-display-middle " style="width:65%">
        <div class="w3-container w3-white w3-padding-16 " >
            <h3 style="text-align: center">Proforma</h3>
            <div class="w3-row-padding" style="margin:0 -16px;">
                <form action="/supervisor/proforma" method="post">
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




{{> footer}}