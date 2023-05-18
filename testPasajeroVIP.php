<?php 
include_once("pasajeroVIP.php");

function Test_Crear_PasajeroVIP (){
    $objPasajeroVIP = new PasajeroVIP("Lautaro", "8", "112", "12", "1200");
    echo $objPasajeroVIP;
}

function main(){
    Test_Crear_PasajeroVIP();
}
main();
?>