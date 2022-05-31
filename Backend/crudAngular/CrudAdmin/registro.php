<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
  header('Content-Type: application/json');

  require_once("./categoria.php");
  require_once("../Conexion_panol.php");;
  $conexion = getEnlace();

  $json = file_get_contents('php://input');

  if(isset($json) && !empty($json)) {
    $params = json_decode($json);
    $nombre = trim($params->name);
    $pwd = mysqli_real_escape_string( trim($request->pwd));
    $email = mysqli_real_escape_string( trim($request->email));
    $insert = "INSERT INTO admin_panol(id_panol, name_panol, contrasena_panol ,email)
            VALUES ('$params->Id', '$name','$pwd','$email')";

    $resp = mysqli_query($conexion, $insert);    
    
    class Result {}
    $response = new Result();
  }

  if ($resp !== false) {
    $response->resultado = 'OK';
    $response->mensaje = 'SE REGISTRO EXITOSAMENTE';
  } 
  else{
    $response->resultado = 'ERROR';
    $response->mensaje = 'NO SE PUDO REALIZAR';
  }

  header('Content-Type: application/json');
  echo json_encode($response);
?>
// if ($mysqli->query($sql) === TRUE) {
//   $authdata = [
//     'name' => $name,
//     'pwd' => '',
//     'email' => $email,
//     'Id' => mysqli_insert_id($mysqli)
//   ];