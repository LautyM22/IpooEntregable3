<?php 
include_once("pasajeroEspecial.php");

function Test_Crear_PasajeroEspecial (){
    $objPasajeroE = new PasajeroEspecial("Lautaro", "8", "112", "No", "Si", "No");
    echo $objPasajeroE;
}

function main(){
    Test_Crear_PasajeroEspecial();
}
main();
?>