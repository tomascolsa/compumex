<?php

if ($_SESSION["perfil"] == "Invitado") 

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

            </tr>

          </thead>

        </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

