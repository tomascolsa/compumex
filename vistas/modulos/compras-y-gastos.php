<?php

if (!$_SESSION["perfil"] == "Administrador") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Compra y Gastos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Compra y Gastos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCompraGasto">

          Agregar Compra y Gasto

        </button>

        <a class="btn btn-success" href="vistas/modulos/descargar-excel.php?excel-compras-y-gastos=excel-compras-y-gastos">

          Exportar a Excel

        </a>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Nombre de compra y gasto</th>
              <th>Descripcion</th>
              <th>Tipo</th>
              <th>Monto</th>
              <th>Cuenta</th>
              <th>Categoria Finanzas</th>
              <th>Proveedor</th>
              <th>Acciones</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $item = null;
            $valor = null;

            $comprasGastos = ControladorComprasGastos::ctrMostrarComprasGastos($item, $valor);

            foreach ($comprasGastos as $key => $value) {

              echo ' <tr>

              <td>' . ($key + 1) . '</td>

              <td class="text-uppercase">' . $value["nombre"] . '</td>
              <td class="text-uppercase">' . $value["descripcion"] . '</td>
              <td class="text-uppercase">' . $value["tipo"] . '</td>
              <td class="text-uppercase">' . $value["monto"] . '</td>';

              $itemCuenta = "id";
              $valorCuenta = $value["id_cuenta"];

              $respuestaCuenta = ControladorCuentas::ctrMostrarCuentas($itemCuenta, $valorCuenta);

              echo '<td class="text-uppercase">' . $respuestaCuenta["nombre"] . '</td>';

              $itemCategoria = "id";
              $valorCategoria = $value["id_categoria"];

              $respuestaCategoria = ControladorCategoriaFinanzas::ctrMostrarCategoriaFinanzas($itemCategoria, $valorCategoria);

              echo '<td class="text-uppercase">' . $respuestaCategoria["nombre"] . '</td>';


              $itemProveedor = "id";
              $valorProveedor = $value["id_proveedor"];

              $respuestaProveedor = ControladorProveedores::ctrMostrarProveedores($itemProveedor, $valorProveedor);

              echo '<td class="text-uppercase">' . $respuestaProveedor["nombre"] . '</td>';

              echo '<td>

                <div class="btn-group">
                    
                  <button class="btn btn-warning btnEditarCompraGasto" idCompraGasto="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCompraGasto"><i class="fa fa-pencil"></i></button>';

              if ($_SESSION["perfil"] == "Administrador") {

                echo '<button class="btn btn-danger btnEliminarCompraGasto" idCompraGasto="' . $value["id"] . '"><i class="fa fa-times"></i></button>';
              }

              echo '</div>  

                    </td>

                  </tr>';
            }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR COMPRA GASTO
======================================-->

<div id="modalAgregarCompraGasto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Compra Y Gasto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre de Compra y Gasto" required>
              </div>

              <!-- ENTRADA PARA LA DESCRIPCION -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripcion" required>
              </div>

              <!-- ENTRADA PARA EL TIPO -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevoTipo">

                  <option value="" disabled selected>Selecionar Tipo</option>

                  <option value="Efectivo">Efectivo</option>

                  <option value="Transferencia">Transferencia</option>

                  <option value="Pago con tarjeta">Pago con tarjeta</option>

                </select>
              </div>

              <!-- ENTRADA PARA EL MONTO -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoMonto" placeholder="Ingresar Monto" step="any" required>
              </div>

              <!-- ENTRADA PARA LA CUENTA -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevaCuenta">
                  <option value="" disabled selected>Selecionar Cuenta</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $cuentas = ControladorCuentas::ctrMostrarCuentas($item, $valor);

                  foreach ($cuentas as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                  }

                  ?>
                </select>
              </div>

              <!-- ENTRADA PARA LA CATEGORIA -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevaCategoria">

                  <option value="" disabled selected>Selecionar Categoria</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategoriaFinanzas::ctrMostrarCategoriaFinanzas($item, $valor);

                  foreach ($categorias as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                  }

                  ?>

                </select>
              </div>

              <!-- ENTRADA PARA EL PROVEEDOR -->

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevoProveedor">

                  <option value="" disabled selected>Selecionar Proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);

                  foreach ($proveedores as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                  }

                  ?>

                </select>
              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Compra Y Gasto</button>

        </div>

        <?php

        $crearCompraGasto = new ControladorComprasGastos();
        $crearCompraGasto->ctrCrearCompraGasto();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR COMPRA GASTO
======================================-->

<div id="modalEditarCompraGasto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Compra Y Gasto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <div class="form-group">

              <!-- ENTRADA PARA EL NOMBRE -->

              <div class="form-group">

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" required>
                </div>

                <!-- ENTRADA PARA LA DESCRIPCION -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion" required>
                </div>

                <!-- ENTRADA PARA EL TIPO -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" name="editarTipo" id="editarTipo">

                    <option value="" disabled selected>Selecionar Tipo</option>

                    <option value="Efectivo">Efectivo</option>

                    <option value="Transferencia">Transferencia</option>

                    <option value="Pago con tarjeta">Pago con tarjeta</option>

                  </select>
                </div>

                <!-- ENTRADA PARA EL MONTO -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input type="number" class="form-control input-lg" name="editarMonto" id="editarMonto" step="any" required>
                </div>

                <!-- ENTRADA PARA LA CUENTA -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" name="editarCuenta" id="editarCuenta">
                    <option value="" disabled selected>Selecionar Cuenta</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $cuentas = ControladorCuentas::ctrMostrarCuentas($item, $valor);

                    foreach ($cuentas as $key => $value) {
                      echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                    }

                    ?>
                  </select>
                </div>

                <!-- ENTRADA PARA LA CATEGORIA -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" name="editarCategoria" id="editarCategoria">

                    <option value="" disabled selected>Selecionar Categoria</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategoriaFinanzas::ctrMostrarCategoriaFinanzas($item, $valor);

                    foreach ($categorias as $key => $value) {
                      echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                    }

                    ?>

                  </select>
                </div>

                <!-- ENTRADA PARA EL PROVEEDOR -->

                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <select class="form-control input-lg" name="editarProveedor" id="editarProveedor">

                    <option value="" disabled selected>Selecionar Proveedor</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);

                    foreach ($proveedores as $key => $value) {
                      echo '<option value="' . $value["id"] . '">' . $value["nombre"] . '</option>';
                    }

                    ?>

                  </select>
                </div>

                <input type="hidden" id="idCompraGasto" name="idCompraGasto">

              </div>

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

        <?php

        $editarCompraGasto = new ControladorComprasGastos();
        $editarCompraGasto->ctrEditarCompraGasto();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

$borrarCompraGasto = new ControladorComprasGastos();
$borrarCompraGasto->ctrBorrarCompraGasto();

?>