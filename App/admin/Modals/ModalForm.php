<!-- Modal Formulario-->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(15, 37, 107); color: white;">
                <h2 class="modal-title" id="exampleModalLongTitle"> <i>Nuevo Usuario</i></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div>
                    <!--Formulario-->
                    <form action="InsertarUsuario.php" method="POST" class="row g-3 needs-validation col"  id="Formulario">
                        <div class="col-12 col-md-4">
                            <label for="id">Documento</label>.
                            <input type="text" name="documento" id="id" class="form-control" placeholder="Documento" required="">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required="">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required="">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="correo">Email</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="validationCustom03" required="" name="password">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Ciudad</label>
                            <select class="form-control" id="validationCustom04" required="" name="ciudad">
                                <option selected disabled value="">Seleccione una ciudadd</option>
                                <option>Aguachica Cesar</option>
                                <option>Apartadó Antioquia</option>
                                <option>Arauca</option>
                                <option>Armenia Quindío</option>
                                <option>Barrancabermeja Santander</option>
                                <option>Barranquilla Atlántico</option>
                                <option>Bello Antioquia</option>
                                <option>Bogotá Distrito Capital</option>
                                <option>Bucaramanga Santander</option>
                                <option>Buenaventura Valle del Cauca</option>
                                <option>Buga Valle del Cauca</option>
                                <option>Cali Valle del Cauca</option>
                                <option>Cartago Valle del Cauca</option>
                                <option>Cartagena Bolívar</option>
                                <option>Caucasia Antioquia</option>
                                <option>Cereté Córdoba</option>
                                <option>Chia Cundinamarca</option>
                                <option>Ciénaga Magdalena</option>
                                <option>Cúcuta Norte de Santander</option>
                                <option>Dosquebradas Risaralda</option>
                                <option>Duitama Boyacá</option>
                                <option>Envigado Antioquia</option>
                                <option>Facatativá Cundinamarca</option>
                                <option>Florencia Caqueta</option>
                                <option>Floridablanca Santander</option>
                                <option>Fusagasugá Cundinamarca</option>
                                <option>Girardot Cundinamarca</option>
                                <option>Girón Santander</option>
                                <option>Ibagué Tolima</option>
                                <option>Ipiales Nariño</option>
                                <option>Itagüí Antioquia</option>
                                <option>Jamundí Valle del Cauca</option>
                                <option>Lorica Córdoba</option>
                                <option>Los Patios Norte de Santander</option>
                                <option>Magangué Bolivar</option>
                                <option>Maicao Guajira</option>
                                <option>Malambo Atlántico</option>
                                <option>Manizales Caldas</option>
                                <option>Medellín Antioquia</option>
                                <option>Melgar Tolima</option>
                                <option>Montería Córdoba</option>
                                <option>Neiva Huila</option>
                                <option>Ocaña Norte de Santander</option>
                                <option>Paipa, Boyacá</option>
                                <option>Palmira Valle del Cauca</option>
                                <option>Pamplona Norte de Santander</option>
                                <option>Pasto Nariño</option>
                                <option>Pereira Risaralda</option>
                                <option>Piedecuesta Santander</option>
                                <option>Pitalito Huila</option>
                                <option>Popayán Cauca</option>
                                <option>Quibdó Choco</option>
                                <option>Riohacha Guajira</option>
                                <option>Rionegro Antioquia</option>
                                <option>Sabanalarga Atlántico</option>
                                <option>Sahagún Córdoba</option>
                                <option>San Andrés Isla</option>
                                <option>Santa Marta Magdalena</option>
                                <option>Sincelejo Sucre</option>
                                <option>Soacha Cundinamarca</option>
                                <option>Sogamoso Boyacá</option>
                                <option>Soledad Atlántico</option>
                                <option>Tibú Norte de Santander</option>
                                <option>Tuluá Valle del Cauca</option>
                                <option>Tumaco Nariño</option>
                                <option>Tunja Boyacá</option>
                                <option>Turbo Antioquia</option>
                                <option>Valledupar Cesar</option>
                                <option>Villa de leyva</option>
                                <option>Villa del Rosario Norte de Santander</option>
                                <option>Villavicencio Meta</option>
                                <option>Yopal Casanare</option>
                                <option>Yumbo Valle del Cauca</option>
                                <option>Zipaquirá Cundinamarca</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required="">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required="">
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese Usuario" required="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                            <button type="submit" name="btnAgregar" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Agregar</button>
                        </div>

                    </form>
                </div>

            </section>
        </div>
    </div>

</div>
</div>
</div>