<?php
  require_once "conexion.php";

  class ModeloMudanzas{

    static public function mdlMostrarMudanzas($tabla, $item, $valor){

      if($item != null){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

        $stmt -> execute();

        return $stmt -> fetch();

      }else {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN articulos ON mudanzas.id_articulo = articulos.id_articulo");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlMostrarMudanzasOrigen($tabla, $item, $valor){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN departamentos ON mudanzas.origen = departamentos.id_departamento");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlMostrarMudanzasDestino($tabla, $item, $valor){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN departamentos ON mudanzas.destino = departamentos.id_departamento");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


    static public function mdlMostrarMudanzasTotal($tabla, $item){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS countm FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();

        $stmt = null;

    }

    static public function mdlIngresarMudanza($tabla, $datos){

  		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fecha, origen, destino, id_articulo, cantidad, merma, costo) VALUES (:fecha, :origen, :destino, :articulo, :cantidad, :merma, :costo)");

      $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
  		$stmt->bindParam(":origen", $datos["origen"], PDO::PARAM_INT);
      $stmt->bindParam(":destino", $datos["destino"], PDO::PARAM_INT);
      $stmt->bindParam(":articulo", $datos["articulo"], PDO::PARAM_INT);
      $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_INT);
      $stmt->bindParam(":merma", $datos["merma"], PDO::PARAM_INT);
      $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_INT);

  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}

    static public function mdlEditarMudanza($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha = :fecha, origen = :origen, destino = :destino, id_articulo = :articulo, cantidad = :cantidad, merma = :merma, costo = :costo WHERE id_mudanza = :id");

    $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
    $stmt->bindParam(":origen", $datos["origen"], PDO::PARAM_INT);
    $stmt->bindParam(":destino", $datos["destino"], PDO::PARAM_INT);
    $stmt->bindParam(":articulo", $datos["articulo"], PDO::PARAM_INT);
    $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_INT);
    $stmt->bindParam(":merma", $datos["merma"], PDO::PARAM_INT);
    $stmt->bindParam(":costo", $datos["costo"], PDO::PARAM_INT);

    if($stmt->execute()){

      return "ok";

    }else{

      return "error";

    }

    $stmt->close();
    $stmt = null;

  }


    static public function mdlEliminarMudanzas($tabla, $item,  $valor){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $item = :id");

      $stmt -> bindParam(":id", $valor, PDO::PARAM_INT);

      if($stmt -> execute()){

        return "ok";

      }else{

        return "error";

      }

      $stmt -> close();

      $stmt = null;

    }

}
