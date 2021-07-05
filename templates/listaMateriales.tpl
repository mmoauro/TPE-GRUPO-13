<aside class="contenedor-lista-materiales">
    <h2 class="form-title">Lista de Materiales Aceptables</h2>
    <ul class="lista-materiales">
    {foreach from=$materiales item=mat}
        <li>
            <div class="contenedor-material">
                {if $is_secretaria}
                    <form method="post" action="material/update/{$mat->id}" class="form edit-material-form">
                        <section>
                            <div>
                                <label for="">Nombre: </label><input type="text" name="nombre" id="mail" placeholder="Nombre" required value="{$mat->nombre}">
                            </div>
                            <div>
                                <label for="">Descripcion: </label><textarea name="descripcion" id="password" rows="4" cols="20" placeholder="Descripcion" required>{$mat->descripcion}</textarea>
                            </div>
                        </section>

                        <div class="Enviar admin-btns">
                            <button class="btn" id="buttonEnviar">Editar</button>
                            <a class="btn" href="{$base_url}material/delete/{$mat->id}">Eliminar</a>
                        </div>
                    </form>
                {else}
                    <h3 class="nombre-material">{$mat->nombre}</h3>
                    <p class="descripcion-material">{$mat->descripcion}</p>
                {/if}
            </div>
            {if $is_secretaria}
                <!-- <a class="btn" href="{$base_url}material/delete/{$mat->id}">Eliminar</a> -->
            {/if}
        </li>
    {/foreach}
    </ul>
</aside>
