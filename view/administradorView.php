{{> header}}

<div >
    <table class="w3-table w3-centered w3-bordered w3-border w3-card-4" style="margin: 35px">
        <thead>
        <tr>
            <th class=" w3-border">DNI</th>
            <th class=" w3-border">Nombre</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Rol</th>
            <th class=" w3-border">Modificar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            {{#usuario}}
            <td class=" w3-border">{{dni}}</td>
            <td class=" w3-border">{{nombre}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border w3-button">{{rol}}</td>

            {{/usuario}}
        </tr>
        </tbody>
    </table>
</div>
{{> footer}}
