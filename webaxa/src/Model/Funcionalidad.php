<?php
require_once "../../bootstrap.php";
require "../Entity/TipoDocumento.php";
require "../Entity/Persona.php";
require "../Entity/Facrura.php";
class Funcionalidad{
    public function tipodocumento($entityManager){
        $tipos=$entityManager->getRepository('TipoDocumento');
        return $tipos;
    }
    public function Search($entity,$Numero_documento,$Tipo_documento){
         $query = $entity->createQueryBuilder();
         $sql=$query->select()
         ->from('Facrura','f')
         ->where('p.codeid_persona = :codeid_persona')
         ->setParameter('state_assignment',$Numero_documento )
         ->innerJoin('f.Persona', 'p')
         ->innerJoin('p.TipoDocumento', 'td');
         $result=$sql->getQuery();
         $Factura= $result->getResult();
         return $Factura;
      
    }

}
