{include file="header.tpl"} <!--Incluyo el header-->

<!--div contenido registro de solicitar retiro de materiales, contiene:
    -FORMULARIO-->
    <main class="contenedorRegistro">
        <form class="formRegistro" action="confirmarSolicitudDeRetiro" method="POST">
            <h4 class="tituloRegistro">Solicitar retiro de materiales</h4>
            
            <input class="inputForm" type="text" placeholder="Ingrese su nombre" name="nombre" required>
            <input class="inputForm" type="text" placeholder="Ingrese su apellido" name="apellido" required>
            <input class="inputForm" type="text" placeholder="Ingrese su direccion" name="direccion" required>
            <input class="inputForm" type="tel" placeholder="Ingrese su telefono" name="telefono" required>
            
            <label class="tituloInputRadio">Seleccione su franja horaria de preferencia</label>
            <input type="radio" id="" name="franja_horaria" value="9 a 12hs" required>
            <label for="male">9 a 12hs</label><br>
            <input type="radio" id="" name="franja_horaria" value="13 a 17hs">
            <label for="female">13 a 17hs</label><br>
            
            <label class="tituloInputRadio" >Seleccione una categoria que indique el volumen del material</label>
            <input type="radio" id="" name="volumen" value="Entra en una caja" required>
            <label for="male">Entra en una caja</label><br>
            <input type="radio" id="" name="volumen" value="Entra en el baúl de un auto">
            <label for="female">Entra en el baúl de un auto</label><br>
            <input type="radio" id="" name="volumen" value="Entra en la caja de una camioneta">
            <label for="male">Entra en la caja de una camioneta</label><br>
            <input type="radio" id="" name="volumen" value="Es necesario un camión">
            <label for="female">Es necesario un camión</label><br>
            
            <input class="botonSubmit" id="botonSubmit" type="submit" value="Enviar solicitud">
    
        </form>
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->