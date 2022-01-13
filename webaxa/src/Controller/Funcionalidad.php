<?php
require '../Model/Funcionalidad.php';

if(isset($_POST['procesador'])){
    $procesador = $_POST['procesador'];
}else{
    $procesador = 1;
}
$Funcionalidad = new Funcionalidad();
if($procesador==1){
    $result=$Funcionalidad->tipodocumento($entityManager);
    foreach ($result as $key):
        $id= $key->getIdTipoDocumento();
        $name =$key->getNameTipoDocumento();
        $data[] =
        array(
            "id_tipo" => $id,
            "name" => $name
        );
    endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
else if($procesador==2){
    $Numero_documento = $_POST['numero_documento'];
    $Tipo_documento = $_POST['tipo_documento'];
    $result=$Funcionalidad->Search($entityManager,$Numero_documento,$Tipo_documento);
    $i=0;
    foreach ($result as $key):
        $i++;
        if($i==1){
            $nombre=$key['name_persona'];
        }
        $data[]=array(
            "valor_factura"=>$key['valor_factura'],
            "vencimineto_factura"=>$key['vencimineto_factura'],
            "vigencia_factura"=>$key['vigencia_factura'],
            "num_plan_factura"=>$key['num_plan_factura']
        );
    endforeach;
    $datos=[
        "nombre"=>$nombre,
        "data"=>$data];
   echo json_encode($datos,JSON_UNESCAPED_UNICODE);
}