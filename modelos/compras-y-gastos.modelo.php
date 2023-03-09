<?php

require_once "conexion.php";

class ModeloComprasGastos
{
  /*=============================================
  CREAR COMPRA Y GASTO
  =============================================*/

  static public function mdlIngresarCompraGasto($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, descripcion, tipo, monto, id_cuenta, id_categoria, id_proveedor) VALUES (:nombre, :descripcion, :tipo, :monto, :id_cuenta, :id_categoria, :id_proveedor)");

    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
    $stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_INT);
    $stmt->bindParam(":id_cuenta", $datos["id_cuenta"], PDO::PARAM_INT);
    $stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
    $stmt->bindParam(":id_proveedor", $datos["id_proveedor"], PDO::PARAM_INT);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();

    $stmt = null;
  }

  /*=============================================
  MOSTRAR COMPRA Y GASTO
  =============================================*/

  static public function mdlMostrarComprasGastos($tabla, $item, $valor)
  {
    if ($item != null) {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

      $stmt->execute();

      return $stmt->fetch();
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt->execute();

      return $stmt->fetchAll();
    }

    $stmt->close();

    $stmt = null;
  }

  /*=============================================
  EDITAR COMPRA Y GASTO
  =============================================*/

  static public function mdlEditarCompraGasto($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, tipo = :tipo, monto = :monto, id_cuenta = :id_cuenta, id_categoria = :id_categoria, id_proveedor = :id_proveedor WHERE id = :id");

    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
    $stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
    $stmt->bindParam(":id_cuenta", $datos["id_cuenta"], PDO::PARAM_INT);
    $stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
    $stmt->bindParam(":id_proveedor", $datos["id_proveedor"], PDO::PARAM_INT);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();

    $stmt = null;
  }

  /*=============================================
  BORRAR COMPRA Y GASTO
  =============================================*/

  static public function mdlBorrarCompraGasto($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();

    $stmt = null;
  }
}
