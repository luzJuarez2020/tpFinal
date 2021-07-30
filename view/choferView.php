{{> header}}
{{> barra}}

<div>
    <table class="w3-table w3-centered w3-bordered w3-border w3-card-4 " style="margin: 35px">
        <thead>
        <tr class="w3-dark-grey">
            <th colspan="7" class=" w3-border">VIAJE ACTUAL</th>
        </tr>
        <tr>
            <th class=" w3-border">Numero</th>
            <th class=" w3-border">Origen</th>
            <th class=" w3-border">Destino</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Fecha de salida estimada</th>
            <th class=" w3-border">Fecha de llegada estimada </th>
            <th class=" w3-border">Reporte diario </th>
        </tr>
        </thead>
        <tbody>
        {{#viajeActual}}
        <tr>
            <td class=" w3-border">{{numero}}</td>
            <td class=" w3-border">{{origen}}</td>
            <td class=" w3-border">{{destino}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border ">{{fecha_salida_previsto}}</td>
            <td class=" w3-border ">{{fecha_llegada_previsto}}</td>
            <td class=" w3-border "><a class="w3-button w3-khaki w3-round-xlarge" href="/dni={{dni}}"><b>Ver qr</b></a></td>
        </tr>
        {{/viajeActual}}
        </tbody>


        <thead>
        <tr class="w3-dark-grey">
            <th colspan="7" class=" w3-border">PROXIMOS VIAJES</th>
        </tr>
        <tr>
            <th class=" w3-border">Numero</th>
            <th class=" w3-border">Origen</th>
            <th class=" w3-border">Destino</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Fecha de salida estimada</th>
            <th class=" w3-border">Fecha de llegada estimada </th>
            <th class=" w3-border">Ver proforma </th>
        </tr>
        </thead>

        <tbody>
        {{#viajes}}
        <tr>
            <td class=" w3-border">{{numero}}</td>
            <td class=" w3-border">{{origen}}</td>
            <td class=" w3-border">{{destino}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border ">{{fecha_salida_previsto}}</td>
            <td class=" w3-border ">{{fecha_llegada_previsto}}</td>
            <td class=" w3-border "><a class="w3-button w3-khaki w3-round-xlarge" href="/dni={{dni}}"><b>Ver pdf</b></a></td>
        </tr>
        {{/viajes}}
        </tbody>

    </table>
</div>
