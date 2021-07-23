{{> header}}
{{> barra}}


<div  >
    <table class="w3-table w3-centered w3-bordered w3-border w3-card-4 " style="margin: 35px">
        <thead>
        <tr class="w3-dark-grey">
            <th colspan="6" class=" w3-border">USUARIOS</th>
        </tr>
        <tr>
            <th class=" w3-border">DNI</th>
            <th class=" w3-border">Nombre</th>
            <th class=" w3-border">Email</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Rol</th>
            <th class=" w3-border">Modificaciones</th>
        </tr>
        </thead>

        <tbody>
        {{#usuarios}}
        <tr>
            <td class=" w3-border">{{dni}}</td>
            <td class=" w3-border">{{nombre}}</td>
            <td class=" w3-border">{{email}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border ">{{rol}}</td>
            <td class=" w3-border "><a class="w3-button w3-khaki w3-round-xlarge" href="administrador/executeModificacion/dni={{dni}}"><b>Editar</b></a>
                <a class="w3-button w3-khaki w3-round-xlarge" href="administrador/borrarUsuario/dni={{dni}}"><b>Borrar</b></a></td>
        </tr>
        {{/usuarios}}
        </tbody>
    </table>
</div>


{{> footer}}
