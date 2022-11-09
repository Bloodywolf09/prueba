    <div class="container-fluid mt-26" id="trabaja_con_nosotros">
        <div class="row">
            <footer class="footer-fondo">
                <div class="row">
                    <div class="col-12 col-sm-12 trab-nos">
                        <p class="titulo-trabaja text-white"> TRABAJA CON CORANDES</p>
                        <p class="sub-nos text-white"> Juntos, podemos impulsar un verdadero cambio</p>
                    </div>


                    <div class="row" style="display:flex">
                        <div class="formulario col-sm-6 mt-4">
                            <form action="enviar_correo.php" class="form-contact" method="post" enctype="multipart/form-data" >
                                <div class="col-sm-12 footer-info-item">
                                    <div class="row">
                                        <div>
                                        <fieldset id="group1" class="text-white">
                                            <input type="radio" value="natural" id="natural" name="group1" checked> PERSONA NATURAL
                                            <input type="radio" value="empresa" id="empresa" name="group1" class="ml-16"> EMPRESA
                                        </fieldset>
                                        </div>
                                        
                                        <div class="user-box campos col-sm-3">
                                            <input type="text" name="nombre" id="nombre" >
                                            <label class="ml-5" name="titulon" id="titulon">Nombre</label>
                                            <label class="ml-5" name="tituloEmpresa" id="tituloEmpresa" style="display:none">Nombre Empresa</label>
                                        </div>

                                        <div class="user-box campos col-sm-3">
                                            <input type="number" name="telefono" id="telefono" >
                                            <label class="ml-5" name="titulot" id="titulot">Telefono</label>

                                            <input type="text" name="nombrePer" id="nombrePer" style="display:none"  >
                                            <label class="ml-5" name="nombrePersona" id="nombrePersona" style="display:none">Nombre Persona</label>
                                        </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-12 footer-info-item">
                                        <div class="row">
                                            <div class="user-box col-sm-12">
                                                <input type="mail" name="email" id="email">
                                                <label class="ml-3" name="tituloem" id="tituloem">Email</label>


                                                <input type="number" name="telefonoContacto" id="telefonoContacto" style="display:none">
                                                <label class="ml-5" name="telefonoContac" id="telefonoContac" style="display:none">Número de Contacto</label>
                                            </div>
                                
                                            
                                            <div class="user-box col-sm-12">
                                                <textarea type="text" name="descripcion" id="descripcion"></textarea>
                                                <label class="ml-3" name="titulodes" id="titulodes">Cuentanos sobre ti</label>


                                                <input type="mail" name="emailEmp" id="emailEmp" style="display:none">
                                                <label class="ml-3" name="emailEmpresa" id="emailEmpresa" style="display:none">Email</label>

                                            </div>
                                            
                                            <div class="user-box col-sm-12">
                                                <textarea type="text" name="descripcionEmpresa"  id="descripcionEmpresa"  style="display:none"></textarea>
                                                <label class="ml-3" name="titulodesEmpresa" id="titulodesEmpresa" style="display:none">Cuentanos sobre ti</label>

                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-12 footer-info-item ml-11">
                                        <div class="row">
                                            <div class="user-box col-sm-12">
                                                <input type="file" name="hojavida" id="hojavida" accept="application/pdf, .doc, .docx, .odf">
                                                <label class="ml-3" name="tituloc" id="tituloc">Envianos tu CV</label>

                                                <input type="file" name="brochure" id="brochure" accept="application/pdf, .doc, .docx, .odf" style="display:none">
                                                <label class="ml-3" name="docBrochure" id="docBrochure" style="display:none">Envianos tu Brochure</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="radio" class="rbutton-datos" name="terminos" value="terminos">
                                        
                                            <a href="doc/POLITICA_DE_TRATAMIENTO_DE_LA_INFORMACION.pdf" class="politicad">
                                            Acepta política de protección de datos de corandes.co
                                            </a></label>
                                <button type="submit" class="btn btn-primary button-form">Enviar</button>
                            </form>
                        </div>

                        <div class="col-6 col-sm-6" style="align-self: center;padding-left: 6%;">
                            <p class="text-white tamaño"><span class="mr-5">
                                <img src="images/direccion.png" class="iconos-foo">
                                </span><strong>Dirección: </strong>:  Neiva, Huila - Colombia 
                            </p>

                            <p class="text-white tamaño"><span class="mr-5">
                                <img src="images/web.png" class="iconos-foo">
                                </span><strong>Sitio Web: </strong> www.corandes.co
                            </p>

                            <p class="text-white tamaño"><span class="mr-5">
                                <img src="images/telefono.png" class="iconos-foo">
                                </span><strong>Telefono</strong>: +57 3107935982 
                            </p>

                        </div>
                    </div>
            </footer>

        </div>

    </div>
    
    
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/campos.js"></script>