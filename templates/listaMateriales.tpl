<aside class="contenedor-lista-materiales">
    <h2 class="titulo-lista-materiales">Lista de Materiales Aceptables</h2>
    <ul class="lista-materiales">
    {foreach from=$materiales item=mat}
        <li>
            <div class="contenedor-material">
                {if $is_secretaria}
                    <form method="post" action="material/update/{$mat->id}">
                        <div class="nombre">
                            <label for="">Nombre: *</label><input type="text" name="nombre" id="mail" placeholder="Nombre" required value="{$mat->nombre}">
                            <br>
                            <label for="">Descripcion: *</label><textarea name="descripcion" id="password" placeholder="Descripcion" required>{$mat->descripcion}</textarea>
                        </div>

                        <div class="Enviar">

                            <button id="buttonEnviar">Editar</button>
                        </div>
                    </form>
                {else}
                    <h3 class="nombre-material">{$mat->nombre}</h3>
                    <p class="descripcion-material">{$mat->descripcion}</p>
                {/if}
            </div>
            {if $is_secretaria}
                <a href="{$base_url}material/delete/{$mat->id}">Eliminar</a>
            {/if}
        </li>
    {/foreach}
    </ul>
    {if $is_secretaria}
        <form method="post" action="material/add">
            <div class="nombre">
                <label for="">Nombre: *</label><input type="text" name="nombre" id="mail" placeholder="Nombre" required>
                <br>
                <label for="">Descripcion: *</label><textarea name="descripcion" id="password" placeholder="Descripcion" required></textarea>
            </div>

            <div class="Enviar">

                <button id="buttonEnviar">Anadir</button>
            </div>
        </form>
    {/if}
</aside>
