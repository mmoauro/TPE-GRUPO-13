    {if $is_secretaria}
<aside class="materiales-form">
    <h2 class="form-title">Añadir Material</h2>
    <form method="post" action="material/add" class="form">
        <section>
            <div>
                <label for="">Nombre: </label><input type="text" name="nombre" id="mail" placeholder="Nombre" required>
            </div>
            <div>
                <label for="">Descripcion: </label><textarea name="descripcion" id="password" rows="4" cols="20" placeholder="Descripcion" required></textarea>
            </div>
        </section>
        
        <div class="Enviar">
            
            <button class="btn" id="buttonEnviar">Anadir</button>
        </div>
    </form>
</aside>
    {/if}