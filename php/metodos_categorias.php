<?php

    require ("conexion.php");

    class Categorias{
        //Leer las categorias
        static public function leerCategorias($elemento = NULL, $valor = NULL){
            if($elemento != NULL){//Seleccionar una categoria especifica
                $stmt = Conexion::connect()->prepare("SELECT * FROM categorias WHERE $elemento LIKE :elemento "); 
                $stmt -> bindParam(":elemento", $valor, PDO::PARAM_STR);
                $stmt -> execute();
                
                return $stmt -> fetch();
            }else{              //Seleccionar todas las categorias
                $stmt = Conexion::connect()->prepare("SELECT * FROM categorias "); 
                $stmt -> execute();

                return $stmt -> fetchAll();
            }
        }
    }