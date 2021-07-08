{include file="header.tpl"} <!--Incluyo el header-->
<link rel="stylesheet" href="css/listaPedidos.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

<main class="divPedidos body">
    <h2>Lista de cartoneros</h2>

    <div class="divTabla">
        <table class="tablaPedidos">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>
                <th>Borrar</th>
                <th>Acopiado</th>
                <th>Editar</th>
            </thead>
            <tbody id="bodyTabla">
            {foreach from=$cartoneros  item=cartonero}
                <tr>
                    <td>{$cartonero->nombre}</td>
                    <td>{$cartonero->apellido}</td>
                    <td>{$cartonero->dni}</td>
                    <td>{$cartonero->direccion}</td>
                    <td>{$cartonero->fecha_nacimiento}</td>
                    <td class="botonBorrar"> <a href='eliminarCartonero/{$cartonero->id}'> <i class="fa fa-trash" style="font-size:36px"></i></a></td>
                    <td><a href='acopiado/{$cartonero->id}'><i class="fa fa-recycle" style="font-size:36px"</i></a></td>
                    <td><button> <a href="edit/{$cartonero->id}">Editar</a> </button></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>

    {if $car != null}
    <article class="form-container">
    <form method="POST" action="edit/{$car->id}" class="form">
        <section>
            <div>
                <label for="">Nombre: </label><input type="text" name="nombre" id="mail" placeholder="Nombre" value="{$car->nombre}" required>
            </div>
           <div>
                <label for="">Apellido: </label><input type="text" name="apellido" id="apellido" placeholder="Apellido" value="{$car->apellido}">
            </div>
            <div>
                <label for="">DNI: </label><input type="number" name="dni" id="dni" placeholder="DNI" value="{$car->dni}">
            </div>
            <div>
                <label for="">Direccion: </label><input type="text" name="direccion" id="direccion" placeholder="Direccion" value="{$car->direccion}">
            </div>
            <div>
                <label for="">Fecha nacimiento: </label><input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
            </div>
        </section>
        <div class="Enviar">
            <button class="btn" id="buttonEnviar">Anadir</button>
        </div>
    </form>
    </article>
    {/if}
    
     {if $car == null}
    <article class="form-container">
    <form method="POST" action="edit/:ID" class="form">
        <section>
            <div>
                <label for="">Nombre: </label><input type="text" name="nombre" id="mail" placeholder="Nombre" required>
            </div>
           <div>
                <label for="">Apellido: </label><input type="text" name="apellido" id="apellido" placeholder="Apellido">
            </div>
            <div>
                <label for="">DNI: </label><input type="number" name="dni" id="dni" placeholder="DNI" >
            </div>
            <div>
                <label for="">Direccion: </label><input type="text" name="direccion" id="direccion" placeholder="Direccion">
            </div>
            <div>
                <label for="">Fecha nacimiento: </label><input type="date" name="fecha_nac" id="fecha_nac">
            </div>
        </section>
        <div class="Enviar">
            <button class="btn" id="buttonEnviar">Anadir</button>
        </div>
    </form>
    </article>
    {/if}

</main>


{include file="footer.tpl"} <!--Incluyo el footer-->