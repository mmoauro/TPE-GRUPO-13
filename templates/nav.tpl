<body>
    <!-- Header, contiene: 
        -barra de navegacion-->
    <header class="header">
        <img id="menuLogo" src="images/logo_reciclaje.jpg" alt="menu-logo" class="menuLogo">
        <nav>
            <ul id="barraNav" class="barraNavegacion">
                {if $is_logged neq true}
                    <a href="{$base_url}login"><li>Iniciar sesion</li></a>
                    
                {else}
                    <a href="{$base_url}logout"><li>Cerrar sesion</li></a>
                {/if}
                <a href="{$base_url}"><li>Inicio</li></a>
                <a href="{$base_url}solicitar_retiro"><li>Solicitar retiro</li></a>
                {if $is_logged neq false && $is_secretaria eq true}
                    <a href="{$base_url}pedidos"><li>Lista de pedidos</li></a>
                    <a href="{$base_url}cartoneros"><li>Lista de cartoneros</li></a>
                    <a href="{$base_url}cargarCartonero"><li>Cargar cartonero</li></a>
                    <a href="{$base_url}registrar_peso"><li>Registrar pesaje</li></a>
                {/if}
            </ul>
        </nav>
    </header>