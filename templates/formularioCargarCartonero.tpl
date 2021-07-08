{include file="header.tpl"} <!--Incluyo el header-->
    <link rel="stylesheet" href="css/cargarCartonero.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

<!--div contenido registro de solicitar retiro de materiales, contiene:
    -FORMULARIO-->
    <main class="body">
        <article class="form-container">
            <h2 class="form-title">Cargar Cartonero</h2>

            <form id="form" class="form formRegistro" action="cargar_cartonero" method="POST" enctype="multipart/form-data">
                <section>
                    <div>
                        <input class="inputForm" type="text" placeholder="Ingrese su nombre" name="nombre" required>
                    </div>
                    <div>
                       <input class="inputForm" type="text" placeholder="Ingrese su apellido" name="apellido" required>
                    </div>
                </section>
                
                
                <section>
                    <div>
                        <input class="inputForm" type="tel" placeholder="Ingrese su DNI" name="DNI" required>
                    </div>
                    <div>
                        <input class="inputForm" type="text" placeholder="Ingrese su direccion" name="direccion" required>
                    </div>
                </section>

                <section>
                    <div>
                        <input class="inputForm" type="date" placeholder="Ingrese su Fecha de nacimiento" name="fechaNacimiento" required>
                    </div>
                    <div>
                        <input class="botonSubmit" id="botonSubmit" type="submit" value="Agregar cartonero">
                    </div>
                </section>

                
        
            </form>
        </article>
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->