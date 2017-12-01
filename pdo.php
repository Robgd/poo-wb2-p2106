<?php

// Modify config array with your own db config
$config = [
    'host' => '127.0.0.1',
    'dbname' => 'ready-fight',
    'user' => 'root',
    'password' => 'root',
    'port' => 8889,
];

/**
 * @param array $config
 *
 * @return PDO
 */
function initPDO(array $config) {
    $connection = new PDO(
        'mysql:host='.$config['host'].';dbname='.$config['dbname'].';port='.$config['port'],
        $config['user'],
        $config['password']
    );

    return $connection;
}

$con = initPDO($config);
