<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
 
  $params = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE
  
  require_once("../Conexion_panol.php");; // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB

  $conexion = getEnlace(); // CREA LA CONEXION

  $insert = "INSERT INTO categoria(id_categoria, nom_categoria) VALUES
  ('$params->Id', '$params->Nombre')";
  
  // REALIZA LA QUERY A LA DB
  $resp = mysqli_query($conexion, $insert);

  class Result {}
  $response = new Result();

  if ($resp !== false) {
    $response->resultado = 'OK';
    $response->mensaje = 'SE REGISTRO EXITOSAMENTE LA CATEGORIA';
  } 
  else{
    $response->resultado = 'ERROR';
    $response->mensaje = 'NO SE PUDO REALIZAR';
  }

  header('Content-Type: application/json');

  echo json_encode($response); // MUESTRA EL JSON GENERADO
?>