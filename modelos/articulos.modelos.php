<?php
  require_once "conexion.php";

  class ModeloArticulos{

    static public function mdlMostrarArticulos($tabla, $item, $valor){

      if($item != null){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

        $stmt -> execute();

        return $stmt -> fetch();

      }else {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();

      }

      $stmt -> close();

      $stmt = null;

    }


    static public function mdlMostrarArticulosTotal($tabla, $item){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT($item) AS counta FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();

        $stmt = null;

    }

    static public function mdlIngresarArticulo($tabla, $datos){

  		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(titulo, descripcion) VALUES (:titulo, :descripcion)");

      $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
  		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

  		if($stmt->execute()){

  			return "ok";

  		}else{

  			return "error";

  		}

  		$stmt->close();
  		$stmt = null;

  	}

    static public function mdlEditarArticulos($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo = :titulo, descripcion = :descripcion  WHERE id_articulo = :id");

    $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

    if($stmt->execute()){

      return "ok";

    }else{

      return "error";

    }

    $stmt->close();
    $stmt = null;

  }


    static public function mdlEliminarArticulos($tabla, $item,  $valor){

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
