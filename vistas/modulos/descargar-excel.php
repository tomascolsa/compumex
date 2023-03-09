<?php

require_once "../../controladores/compras-y-gastos.controlador.php";
require_once "../../modelos/compras-y-gastos.modelo.php";
require_once "../../controladores/clientes.controlador.php";
require_once "../../modelos/clientes.modelo.php";
require_once "../../controladores/productos.controlador.php";
require_once "../../modelos/productos.modelo.php";

// Definir la lista de configuraciones para cada informe
$reportes_config = array(
  array(
    'url' => 'excel-compras-y-gastos',
    'controlador' => new ControladorComprasGastos()
  ),
  array(
    'url' => 'excel-clientes',
    'controlador' => new ControladorClientes()
  ),
  array(
    'url' => 'excel-productos',
    'controlador' => new ControladorProductos()
  )
);

// Buscar la configuración correspondiente a la URL actual
$config = null;
foreach ($reportes_config as $reporte) {
  if (isset($_GET[$reporte['url']])) {
    $config = $reporte;
    break;
  }
}

// Llamar al controlador adecuado si se encontró la configuración
if ($config != null) {
  $controlador = $config['controlador'];
  $controlador->ctrExportarExcel();
}
