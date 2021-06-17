{include file="header.tpl"} 
  <link rel="stylesheet" href="css/login.css">
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

<article class="body">
  <div class="login-container">
    <!-- <div class="login-form"> -->
      <h2 class="form-title">Iniciar Sesión</h2>
      {if $mensaje != ""}
      {$mensaje}
      {/if}
        <form action="verificar" method="POST" class="login-form form">
          <section>
            <div>
              <label for="">Mail: </label><input type="text" name="mail" id="mail" placeholder="Mail" required>
            </div>
          </section>

          <section>
            <div>
              <label for="">Contraseña: </label><input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
          </section>
         
          <div class="Enviar">
            <button class="btn" id="buttonEnviar">Iniciar sesion</button>
          </div>
        </form>
      </div>
    <!-- </div> -->
  </section>
</article>

{include file="footer.tpl"} 