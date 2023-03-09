<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/almacen.controlador.php";
require_once "controladores/cuentas.controlador.php";
require_once "controladores/categorias-finanzas.controlador.php";
require_once "controladores/proveedores.controlador.php";
require_once "controladores/compras-y-gastos.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/almacen.modelo.php";
require_once "modelos/cuentas.modelo.php";
require_once "modelos/categorias-finanzas.modelo.php";
require_once "modelos/proveedores.modelo.php";
require_once "modelos/compras-y-gastos.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
