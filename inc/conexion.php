<?php
  
       $base='mysql:dbname=menu;host:127.0.0.1';
       $usuario='root';
       $contraseña='';

       try {
           $con=new PDO($base,$usuario,$contraseña);
         } catch (Exception $e) {
           echo $e->getMenssage();

       }
?>