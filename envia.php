<?php 
     
     $dbHost = 'Localhost';
     $dbUsername = 'root';
     $dbPassword = 'gabriella1';
     $dbName ='form_tcc';

     $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

     /*if($conexao -> connect_errno){
        echo"erro";
     }
     else{
        echo"conexao efetuada";
     }*/
     
?>