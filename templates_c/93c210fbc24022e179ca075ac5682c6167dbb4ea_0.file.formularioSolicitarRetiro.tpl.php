<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 23:31:02
  from 'C:\xampp\htdocs\TPE-Metodologias\TPE-GRUPO-13\templates\formularioSolicitarRetiro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ad6c96ab1150_57386904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c210fbc24022e179ca075ac5682c6167dbb4ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Metodologias\\TPE-GRUPO-13\\templates\\formularioSolicitarRetiro.tpl',
      1 => 1621978256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ad6c96ab1150_57386904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <!--Incluyo el header-->

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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <!--Incluyo el footer--><?php }
}
