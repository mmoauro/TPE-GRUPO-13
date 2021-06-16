{include file="header.tpl"} <!--Incluyo el header-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!--div contenido registro de solicitar retiro de materiales, contiene:
    -FORMULARIO-->
    <main class="contenedorRegistro">
        <form id="form" class="formRegistro" action="insertar_peso_db" method="POST" enctype="multipart/form-data">
            <h4 class="tituloRegistro">Registrar Peso</h4>
            
            <input class="inputForm" type="text" placeholder="Ingrese el peso en kg" name="peso" required>
            {if isset($materiales)}
            <select name="material" id="select">
                {foreach from=$materiales item=material}
                    <option value="{$material->id}">{$material->nombre}.</option>
                {/foreach}
            </select>
            {/if}
            {if isset($cartoneros)}
            <select name="cartonero" id="select">
                {foreach from=$cartoneros item=persona}
                {if $persona->id == 0}
                    <option value="{$persona->id}">{$persona->nombre}</option>
                {else}
                    <option value="{$persona->id}">{$persona->nombre}. DNI: {$persona->dni}</option>
                {/if}

                {/foreach}
            </select>
            {/if}
            <input class="botonSubmit" id="botonSubmit" type="submit" value="Enviar">
        </form>
        <a class="tituloRegistro">{$mensaje}<a>
        <a href="registrarCartonero" class="tituloRegistro">¿Cartonero no registrado?<a>
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->