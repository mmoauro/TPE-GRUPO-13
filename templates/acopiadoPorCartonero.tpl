{include file="header.tpl"} <!--Incluyo el header-->
    <link rel="stylesheet" href="css/listaPedidos.css">
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

    <main class="divPedidos body">
        <h2>Materiales Acopiados Por</h2>
        <h2>{$cartonero->apellido} {$cartonero->nombre} ({$cartonero->dni})</h2>
        
        <div class="divTabla">
        <table class="tablaPedidos">
            <thead>
                    <th>Nombre del Material</th>
                    <th>Pesaje en kg del Material</th>
            </thead>
            <tbody id="bodyTabla">
                {foreach from=$pesajes  item=pesaje}
                    <tr>
                        <td>{$pesaje->nombre}</td>
                        <td>{$pesaje->peso}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        </div>   
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->