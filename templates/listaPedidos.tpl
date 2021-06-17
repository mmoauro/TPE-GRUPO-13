{include file="header.tpl"} <!--Incluyo el header-->
    <link rel="stylesheet" href="css/listaPedidos.css">
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

    <main class="divPedidos body">
        <h2>Lista de pedidos</h2>
        
        <div class="divTabla">
        <table class="tablaPedidos">
            <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Franja horaria</th>
                    <th>Volumen</th>
            </thead>
            <tbody id="bodyTabla">
                {foreach from=$pedidos  item=pedido}
                    <tr>
                        <td>{$pedido->nombre}</td>
                        <td>{$pedido->apellido}</td>
                        <td>{$pedido->direccion}</td>
                        <td>{$pedido->telefono}</td>
                        <td>{$pedido->franja_horaria}</td>
                        <td>{$pedido->volumen}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        </div>   
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->