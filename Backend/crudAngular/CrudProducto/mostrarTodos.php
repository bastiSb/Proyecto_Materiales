<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
header('Content-Type: application/json');


require_once("./producto.php");
require_once("../Conexion_panol.php");
$conexion = getEnlace();

$registro = mysqli_query($conexion ,"select id_producto, nom_producto, stock_producto, fk_id_categoria, marca from producto");
$vec = [];
while($reg = mysqli_fetch_array($registro)){
    $prod = new Producto($reg['id_producto'], $reg['nom_producto'], $reg['stock_producto'], $reg['fk_id_categoria'], $reg['marca']);
    array_push($vec,$prod);
}
$cad = json_encode($vec);
echo $cad;
?>