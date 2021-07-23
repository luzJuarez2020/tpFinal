{{> header}}


    <div class="w3-content w3-padding-large w3-margin-top">
        <div class="w3-container w3-white w3-padding-16 ">
            <h3 style="text-align: center">Proforma</h3>
                <form action="/cargarViaje/cargarProforma" method="post">
                    <p>Cliente</p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="cuitCliente" type="number" placeholder="cuit" required ></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="emailCliente" type="email" placeholder="email" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="direccionCliente" type="text" placeholder="direccion" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="telCliente" type="number" placeholder="telefono" required></p>

                    <p>Datos del viaje</p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="fechaCarga" type="date" placeholder="fecha de carga" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="origen" type="text"  placeholder="lugar de origen" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="destino" type="text" placeholder="lugar de destino" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="etd" type="date" placeholder="fecha estimada de salida" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="eta" type="date" placeholder="fecha estimada de llegada" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="kmPrev" type="number" placeholder="km previstos" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="combustiblePrev" type="number" placeholder="combustible previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="gastosCombustiblePrev" type="number" placeholder="gasto de combustible previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="peajePrev" type="number" placeholder="peaje previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="pesajePrev" type="number" placeholder="pesaje previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="viaticosPrev" type="number" placeholder="viaticos previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="extrasPrev" type="number" placeholder="extras previsto" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="feePrev" type="number" placeholder="fee previsto" required></p>

                    <p>Datos de carga</p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="tipoCarga" type="text" placeholder="tipo de carga" required></p>
                    <p>
                    <label for="hazard">Hazard</label><br>
                        <input class="w3-radio" type="radio" name="hazard" value="si">
                        <label>SI</label>

                        <input class="w3-radio" type="radio" name="hazard" value="no">
                        <label>NO</label>
                    </p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="precioHazard" type="number" placeholder="precio del hazard" ></p>
                    <p>
                        <label for="reefer">Reefer</label><br>
                        <input class="w3-radio" type="radio" name="reefer" value="si">
                        <label>SI</label>

                        <input class="w3-radio" type="radio" name="reefer" value="no">
                        <label>NO</label>
                    </p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="precioReefer" type="number" placeholder="precio del reefer" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="pesoCarga" type="number" placeholder="peso de la carga" required></p>
                    <p><input class="w3-input w3-padding-16 w3-border" name="temp" type="number" placeholder="temperatura carga" required></p>


                    <p>Camion</p>
                    <select class="form-control" name="tractorViaje">
                        <option selected value="0" >Seleccionar Camion</option>
                        {{#camiones}}
                        <option value="{{patente}}">{{marca}} {{modelo}} </option>
                        {{/camiones}}
                    </select>

                    <p>Arrastrado</p>
                    <select class="form-control" name="arrastradoViaje">
                        <option selected value="0" >Seleccionar Arrastrado</option>
                        {{#arrastrados}}
                        <option value="{{patente}}">{{tipo}}</option>
                        {{/arrastrados}}
                    </select>

                    <p>Supervisor</p>
                    <select class="form-control" name="supervisorViaje">
                        <option selected value="0" >Seleccionar Supervisor</option>
                        {{#supervisores}}
                        <option value="{{dni_usuario}}">{{id}}-{{dni_usuario}}</option>
                        {{/supervisores}}
                    </select>

                    <p>Chofer</p>
                    <select class="form-control" name="choferViaje">
                        <option selected value="0" >Seleccionar Chofer</option>
                        {{#choferes}}
                        <option value="{{dni_usuario}}">{{dni_usuario}}</option>
                        {{/choferes}}
                    </select>



                    <p><button class="w3-btn w3-khaki w3-round-xlarge  w3-block" type="submit"><b>Cargar</b></button></p>
                </form>
            </div>
        </div>









