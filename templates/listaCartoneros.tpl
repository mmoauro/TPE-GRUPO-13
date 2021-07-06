{include file="header.tpl"} <!--Incluyo el header-->
<link rel="stylesheet" href="css/listaPedidos.css">
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

<main class="divPedidos body">
    <h2>Lista de cartoneros</h2>

    <div class="divTabla">
        <table class="tablaPedidos">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>
            </thead>
            <tbody id="bodyTabla">
            {foreach from=$cartoneros  item=cartonero}
                <tr>
                    <td>{$cartonero->nombre}</td>
                    <td>{$cartonero->apellido}</td>
                    <td>{$cartonero->dni}</td>
                    <td>{$cartonero->direccion}</td>
                    <td>{$cartonero->fecha_nacimiento}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
</main>


{include file="footer.tpl"} <!--Incluyo el footer-->