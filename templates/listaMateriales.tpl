<aside class="contenedor-lista-materiales">
    <h2 class="titulo-lista-materiales">Lista de Materiales Aceptables</h2>
    <ul class="lista-materiales">
    {foreach from=$materiales item=mat}
        <li>
            <div class="contenedor-material">
                <h3 class="nombre-material">{$mat->nombre}</h3>
                <p class="descripcion-material">{$mat->descripcion}</p>
            </div>
        </li>
    {/foreach}
    <!-- Hardcodeado para que se vea un ejemplo hasta que la db tenga materiales -->
        <li>
            <div class="contenedor-material">
                <h3 class="nombre-material">Plastico</h3>
                <p class="descripcion-material">Se aceptan solo plasticos de color blanco.</p>
            </div>
        </li>
    </ul>
</aside>