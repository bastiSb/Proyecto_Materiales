<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
header('Content-Type: application/json');


require_once("./solicitante.php");
require_once("../Conexion_panol.php");
$conexion = getEnlace();

$registro = mysqli_query($conexion ,"select id_solicitante, tipo_solicitante, run_soli, 
                        p_nombre_sol, s_nombre_sol, p_apellido_sol, s_apellido_sol,
                        correo_ins_sol, num_tel_sol, fk_id_escuela, fk_id_seccion, 
                        fk_id_carrera, pwd_soli from solicitante");
$vec = [];
while($reg = mysqli_fetch_array($registro)){
    $prod = new Solicitante($reg['id_solicitante'], $reg['tipo_solicitante'],
                            $reg['run_soli'], $reg['p_nombre_sol'], $reg['s_nombre_sol'],
                            $reg['p_apellido_sol'], $reg['s_apellido_sol'], $reg['correo_ins_sol'],
                            $reg['num_tel_sol'], $reg['fk_id_escuela'], $reg['fk_id_seccion'],
                            $reg['fk_id_carrera'], $reg['pwd_soli']);
    array_push($vec,$prod);
}
$cad = json_encode($vec);
echo $cad;
?>