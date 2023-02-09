<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

$uri = "mongodb://root:secretpass@mongo-node-1,mongo-node-2,mongo-node-3/?replicaSet=rs0";

$options = [
//    'directConnection' => false,
//    'connectTimeoutMS' => 1000,
//    'serverSelectionTimeoutMS' => 1000,
//    'serverSelectionTryOnce' => false,
//    'socketTimeoutMS' => 1000,
//    'readPreference' => \MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED,
//    'heartbeatFrequencyMS' => 500,
//    'ssl' => false,
//    'timeout' => 100,
];

try {
    $manager = new MongoDB\Driver\Manager($uri, $options);
    $command = new MongoDB\Driver\Command(['ping' => 1]);
    $cursor = $manager->executeCommand('db', $command);
    $response = $cursor->toArray()[0];
    var_dump($response);
    echo '<br><br>';
    var_dump($manager->getServers());
} catch (Exception $e) {
    echo $e->getMessage();
}