{{> header}}

<div class="w3-bar w3-black ">
    <a href="/administrador/execute" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-khaki w3-padding-large">Link 3</a>
</div>


<div >
    <table class="w3-table w3-centered w3-bordered w3-border w3-card-4 w3-hoverable" style="margin: 35px">
        <thead>
        <tr class="w3-dark-grey">
            <th colspan="4" class=" w3-border">USUARIOS</th>
        </tr>
        <tr>
            <th class=" w3-border">DNI</th>
            <th class=" w3-border">Nombre</th>
            <th class=" w3-border">Estado</th>
            <th class=" w3-border">Rol</th>
        </tr>
        </thead>

        <tbody>
        {{#usuario}}
        <tr>
            <td class=" w3-border">{{dni}}</td>
            <td class=" w3-border">{{nombre}}</td>
            <td class=" w3-border">{{estado}}</td>
            <td class=" w3-border w3-button"><a href="/administrador/executeModRol/dni={{dni}}">X {{rol}}</a></td>
        </tr>
        {{/usuario}}
        </tbody>
    </table>
</div>


{{> footer}}
