<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
  header('Content-Type: application/json');

  require_once("./categoria.php");
  require_once("../Conexion_panol.php");;
  $conexion = getEnlace();

  $json = file_get_contents("php://input");
  $conexion = json_decode($json);

  if(isset($json) && !empty($json)){
    $pwd = mysqli_real_escape_string($mysqli, trim($conexion->password));
    $email = mysqli_real_escape_string($mysqli, trim($conexion->username));
    $user = "SELECT Count(*) FROM admin_panol where email_panol='$email' and contrasena_panol='$pwd'";
    $result = mysqli_query($conexion, $user);

    if($result === '1'){
      $rows = array();
      while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
      }

      echo json_encode($rows);
    }

    else{
      http_response_code(404);
    }

  }
?>
  // if($result = mysqli_query($conexion, $user)){
  //   $rows = array();
  //   while($row = mysqli_fetch_assoc($result)){
  //     $rows[] = $row;
  //   }

  //   echo json_encode($rows);
  // }

  // else{
  //   http_response_code(404);
  // }