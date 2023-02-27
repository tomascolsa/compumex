<?php

if ($_SESSION["perfil"] == "Vendedor") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>


<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar productos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar productos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">

          Agregar producto

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Descripción</th>
              <th>Código</th>
              <th>Almacen</th>
              <th>Categoría</th>
              <th>Stock</th>
              <th>Estetica de Producto</th>
              <th>Procesador</th>
              <th>Precio Remate</th>
              <th>Precio Mayoreo</th>
              <th>Precio de venta</th>
              <th>Producto Agregado</th>
              <th>Imagen</th>
              <th>Acciones</th>

            </tr>

          </thead>

        </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>

                  <option value="">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {

                    echo '<option value="' . $value["id"] . '">' . $value["categoria"] . '</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR ALMACEN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-home"></i></span>

                <select class="form-control input-lg" id="nuevaAlmacen" name="nuevaAlmacen" required>

                  <option value="">Selecionar Almacen</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $almacen = ControladorAlmacen::ctrMostrarAlmacen($item, $valor);

                  foreach ($almacen as $key => $value) {

                    echo '<option value="' . $value["id"] . '">' . $value["almacen"] . '</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL ESTETICA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-eye"></i></span>

                <input type="text" class="form-control input-lg" id="nuevoEstetica" name="nuevoEstetica" placeholder="Ingresar Estética" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL Procesador -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-microchip"></i></span>

                <input type="text" class="form-control input-lg" id="nuevoCpug" name="nuevoCpug" placeholder="Ingresar Datos de Procesador" required>

              </div>

            </div>


            <!-- ENTRADA PARA STOCK -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-tasks"></i></span>

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>

              </div>

            </div>

            <!-- ENTRADA PARA PRECIO REMATE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                <input type="number" class="form-control input-lg" id="nuevoPrecioRemate" name="nuevoPrecioRemate" step="any" min="0" required placeholder="Precio Remate">

              </div>

              <br>

              <!-- ENTRADA PARA PRECIO MAYOREO-->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-gg-circle"></i></span>

                  <input type="number" class="form-control input-lg" id="nuevoPrecioMayoreo" name="nuevoPrecioMayoreo" step="any" min="0" required placeholder="Precio Mayoreo">

                </div>

                <br>


              <!-- ENTRADA PARA PRECIO VENTA -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-dollar"></i></span>

                  <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" required placeholder="Precio Venta">

                </div>

                <br>

                  <!-- ENTRADA PARA SUBIR FOTO -->

                  <div class="form-group">

                    <div class="panel">SUBIR IMAGEN</div>

                    <input type="file" class="nuevaImagen" name="nuevaImagen">

                    <p class="help-block">Peso máximo de la imagen 2MB</p>

                    <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

      <?php $crearProducto = new ControladorProductos();
      $crearProducto->ctrCrearProducto(); ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <p>Categoria</p>

                <select class="form-control input-lg" name="editarCategoria">
                  

                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR ALMACEN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-home"></i></span>

                <p>Almacen</p>

                <select class="form-control input-lg" name="editarAlmacen">

                  <option id="editarAlmacen"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <p>Código de Producto</p>

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo">

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <p>Descripción</p>

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA ESTETICA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-eye"></i></span>

                <p>Estética</p>

                <input type="text" class="form-control input-lg" id="editarEstetica" name="editarEstetica" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CPUG -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-microchip"></i></span>

                <p>Procesador</p>

                <input type="text" class="form-control input-lg" id="editarCpug" name="editarCpug" required>

              </div>

            </div>


            <!-- ENTRADA PARA STOCK -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-tasks"></i></span>

                <p>Stock</p>

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

            <!-- ENTRADA PARA PRECIO REMATE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                <p>Precio Remate</p>

                <input type="number" class="form-control input-lg" id="editarPrecioRemate" name="editarPrecioRemate" step="any" min="0">

              </div>

              <br>

              <!-- ENTRADA PARA PRECIO MAYOREO -->

              <div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-gg-circle"></i></span>

                  <p>Precio Mayoreo</p>

                  <input type="number" class="form-control input-lg" id="editarPrecioMayoreo" name="editarPrecioMayoreo" step="any" min="0">

                </div>
                <br>


                <!-- ENTRADA PARA PRECIO VENTA -->

                <div>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>

                    <p>Precio Venta</p>

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0">

                  </div>

                  <br>



                  <!-- ENTRADA PARA SUBIR FOTO -->

                  <div class="form-group">

                    <div class="panel">SUBIR IMAGEN</div>

                    <input type="file" class="nuevaImagen" name="editarImagen">

                    <p class="help-block">Peso máximo de la imagen 2MB</p>

                    <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                    <input type="hidden" name="imagenActual" id="imagenActual">

                  </div>

                </div>

              </div>

              <!--=====================================
        PIE DEL MODAL
        ======================================-->

              <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                <button type="submit" class="btn btn-primary">Guardar cambios</button>

              </div>

      </form>

      <?php

      $editarProducto = new ControladorProductos();
      $editarProducto->ctrEditarProducto();

      ?>

    </div>

  </div>

</div>




<?php

$eliminarProducto = new ControladorProductos();
$eliminarProducto->ctrEliminarProducto();

?>