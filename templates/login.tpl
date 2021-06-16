{include file="header.tpl"} 


<section class="cuerpo">
    <div class="formulario">
    <h2 class="sub-principal">Iniciar Sesión</h2>
    {if $mensaje != ""}
    {$mensaje}
    {/if}
      <form action="verificar" method="POST">
        <div class="nombre">
          <label for="">mail: *</label><input type="text" name="mail" id="mail" placeholder="Mail" required>
          <label for="">Contraseña: *</label><input type="password" name="password" id="password" placeholder="Contraseña" required>
        </div>
       
    <p><a href="registrarse">Crea cuenta nueva</a></p>
        <div class="Enviar">
          
          <button id="buttonEnviar">Iniciar sesion</button>
        </div>
      </form>
    </div>
</section>

{include file="footer.tpl"} 