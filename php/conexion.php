<?php
    class Conexion{
        static public function connect(){

            $serv = "localhost";
            $db = "postales";
            $user = "root";
            $pass = "";
    
            $link = new PDO("mysql:host=".$serv.";dbname=".$db."",
                        $user,
                        $pass);
    
            $link->exec("set names utf8");
    
            return $link;
    
        }
    
    }