<?php
    $serverName = "tiusr10pl.cuc-carrera-ti.ac.cr\MSSQLSERVER2019";
    $connectionInfo = array("Database"=>"BAJA", "UID"=>"aquesada", "PWD"=>"Rock123456789!", "CharacterSet"=>"UTF-8");
    $con = sqlsrv_connect($serverName, $connectionInfo);
    if($con){
        echo "conexión exitosa";
    }else{
        echo "fallo en la conexión";
    }
?>