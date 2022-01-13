<?php
require_once "../../bootstrap.php";
require "../Entity/TipoDocumento.php";
require "../Entity/Persona.php";
require "../Entity/Factura.php";
class Funcionalidad{
    public function tipodocumento($entityManager){
        $tipos=$entityManager->getRepository('TipoDocumento')->findAll();
        return $tipos;
    }
    public function Search($entity,$Numero_documento,$Tipo_documento){
        $query = $entity->createQueryBuilder();
        $sql1=$query->select('p.name_persona','f.valor_factura','f.vencimineto_factura','f.vigencia_factura','f.num_plan_factura')
        ->from('Factura','f')
        ->where('f.vigencia_factura = :vigencia_factura')
        ->setParameter('vigencia_factura', '1')
        ->innerJoin('f.Persona', 'p')
        ->andWhere('p.codeid_persona = :codeid_persona')
        ->setParameter('codeid_persona',$Numero_documento )
        ->innerJoin('p.TipoDocumento', 'td')
        ->andWhere('td.id_tipo_documento = :id_tipo_documento')
        ->setParameter('id_tipo_documento',$Tipo_documento);
        $result=$sql1->getQuery();
        $Factura= $result->getResult();
        return $Factura;
    }

}
