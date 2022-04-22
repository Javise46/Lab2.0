<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
            $servidor="localhost";
            $pass="";
            $user="root";
            $DataBase="controlweb";

            parent::__construct($servidor, $user, $pass, $DataBase);
            $this->query("SET NAMES 'utf-8';");
            $this->connect_errno ?  die('Error en la conexion') : $error="conectado a->".$DataBase;
            //echo $error;
        }
    }
    
?>