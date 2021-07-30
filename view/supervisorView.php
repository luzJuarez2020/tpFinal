{{> header}}
{{> barra}}

<div>
    <table class="w3-table w3-centered w3-bordered w3-border w3-card-4 " style="margin: 35px">
        <thead>
        <tr class="w3-dark-grey">
            <th colspan="7" class=" w3-border">VIAJES EN CURSO</th>
        </tr>
        <tr>
            <th class=" w3-border">Numero</th>
            <th class=" w3-border">Origen</th>
            <th class=" w3-border">Destino</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Fecha de salida estimada</th>
            <th class=" w3-border">Fecha de llegada estimada </th>
            <th class=" w3-border">Ver</th>
        </tr>
        </thead>
        <tbody>
        {{#viajesCurso}}
        <tr>
            <td class=" w3-border">{{numero}}</td>
            <td class=" w3-border">{{origen}}</td>
            <td class=" w3-border">{{destino}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border ">{{fecha_salida_previsto}}</td>
            <td class=" w3-border ">{{fecha_llegada_previsto}}</td>
            <td class=" w3-border "><a class="w3-button w3-khaki w3-round-xlarge" href=""><b>Ubicacion</b></a>
                <a class="w3-button w3-khaki w3-round-xlarge" href=""><b>Pdf</b></a></td>
        </tr>
        {{/viajesCurso}}
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
            <th class=" w3-border">Ver </th>
        </tr>
        </thead>

        <tbody>
        {{#viajesProx}}
        <tr>
            <td class=" w3-border">{{numero}}</td>
            <td class=" w3-border">{{origen}}</td>
            <td class=" w3-border">{{destino}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border ">{{fecha_salida_previsto}}</td>
            <td class=" w3-border ">{{fecha_llegada_previsto}}</td>
            <td class=" w3-border "><a class="w3-button w3-khaki w3-round-xlarge" href="detallePdf/crearPdf"><b>Pdf</b></a></td>
        </tr>
        {{/viajesProx}}
        </tbody>
    </table>
</div>



