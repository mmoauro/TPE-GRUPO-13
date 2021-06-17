{include file="header.tpl"} <!--Incluyo el header-->
    <link rel="stylesheet" href="css/solicitarRetiro.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/map.js"></script>
</head>

{include file="nav.tpl"} <!--Incluyo el nav-->

<!--div contenido registro de solicitar retiro de materiales, contiene:
    -FORMULARIO-->
    <main class="body">
        <article class="form-container">
            <h2 class="form-title">Solicitar retiro de materiales</h2>
            <form id="form" class="form retiro-form" action="confirmar_solicitud_retiro" method="POST" enctype="multipart/form-data">
                <section>
                    <div>
                        <input class="inputForm" type="text" placeholder="Ingrese su nombre" name="nombre" required>
                    </div>
                    <div>
                        <input class="inputForm" type="text" placeholder="Ingrese su direccion" name="direccion" required>
                    </div>
                </section>
                
                
                <section>
                    <div>
                        <input class="inputForm" type="text" placeholder="Ingrese su apellido" name="apellido" required>
                    </div>
                    <div>
                        <input class="inputForm" type="tel" placeholder="Ingrese su telefono" name="telefono" required>
                    </div>
                    <input type="hidden" name="latitude" id="latitude">
                </section>

                <input type="hidden" name="longitude" id="longitude">

                <section id="map-container" class="map-section">
                    <div class="map" id="map">
    
                    </div>
                </section>
                
                <section>
                    <div>
                        <label class="tituloInputRadio">Seleccione su franja horaria de preferencia</label>
                        <input type="radio" id="" name="franja_horaria" value="9 a 12hs" required>
                        <label for="male">9 a 12hs</label><br>
                        <input type="radio" id="" name="franja_horaria" value="13 a 17hs">
                        <label for="female">13 a 17hs</label><br>

                    </div>
                </section>

                <section>
                    <div>
                        <label class="tituloInputRadio" >Seleccione una categoria que indique el volumen del material</label>
                        <input type="radio" id="" name="volumen" value="Entra en una caja" required>
                        <label for="male">Entra en una caja</label><br>
                        <input type="radio" id="" name="volumen" value="Entra en el baúl de un auto">
                        <label for="female">Entra en el baúl de un auto</label><br>
                        <input type="radio" id="" name="volumen" value="Entra en la caja de una camioneta">
                        <label for="male">Entra en la caja de una camioneta</label><br>
                        <input type="radio" id="" name="volumen" value="Es necesario un camión">
                        <label for="female">Es necesario un camión</label><br>
                    </div>
                </section>
                
               <section>
                   <div>
                       <label name="imagen"> Imagen: <input type="file" name="upload[]" accept=".png,.jpg" multiple /></label>
                   </div>
               </section>
               <section></section>
                
                <input class="botonSubmit" id="botonSubmit" type="submit" value="Enviar solicitud">
        
            </form>
        </article>
    </main>


{include file="footer.tpl"} <!--Incluyo el footer-->