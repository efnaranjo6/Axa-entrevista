<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode, $proxyDir, $cache,
$useSimpleAnnotationReader);

$conn = [
'dbname' => 'axa',
'user' => 'useraxa',
'password' => '1234',
'host' => 'BDAXA',
'driver' => 'pdo_mysql',
];
$entityManager = EntityManager::create($conn, $config);