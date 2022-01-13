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
    $Funcionalidad->Search($entityManager,$Numero_documento,$Tipo_documento);

}