<?php
require '../Model/Funcionalidad.php';

if(isset($_POST['prosecution'])){
    $procesador = $_POST['prosecution'];
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
            "id_trade" => $id,
            "name" => $name
        );
    endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
else if($procesador==2){
    $Funcionalidad->Search($entityManager,$Numero_documento,$Tipo_documento);
}