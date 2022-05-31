<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
header('Content-Type: application/json');


require_once("./categoria.php");
require_once("../Conexion_panol.php");
$conexion = getEnlace();

$registro = mysqli_query($conexion ,"select id_categoria, nom_categoria from categoria");
$vec = [];
while($reg = mysqli_fetch_array($registro)){
    $prod = new Categoria($reg['id_categoria'], $reg['nom_categoria']);
    array_push($vec,$prod);
}
$cad = json_encode($vec);
echo $cad;
?>