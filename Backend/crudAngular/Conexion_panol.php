<?php
function getEnlace(){
    $enlace = mysqli_connect("127.0.0.1", "root", "", "panol");
    return $enlace;
}





























// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: GET,POST");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
// $servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "panol";
// $conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);
// print_r($conexionBD);
// print_r($conexionBD->mysqli_connect());
// $con = $conexionBD->mysqli_connect();


// if ($con){
//     echo "Conectado con la base";
// }
// else {
//     echo "Error";
// }

// // Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
// if (isset($_GET["consultar"])){
//     $sqlpanol = mysqli_query($conexionBD,"SELECT * FROM producto WHERE id=".$_GET["consultar"]);
//     if(mysqli_num_rows($sqlpanol) > 0){
//         $producto = mysqli_fetch_all($sqlpanol,MYSQLI_ASSOC);
//         echo json_encode($panol);
//         exit();
//     }
//     else{  echo json_encode(["success"=>0]); }
// ?>