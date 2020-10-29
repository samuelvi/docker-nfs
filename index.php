<?php

try {
    runMariaDbQuery();
    echo '<br>';
    runRedisChecking();
    phpinfo();

} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

function runMariaDbQuery() {
    $pdo = new PDO('mysql:host=docker_nfs_mariadb;dbname=nfs', 'nfs', 'nfs');

    $now = date('YmdHis');
    $name = 'user_' . $now;
    $value = $now;

    $sql = "DELETE FROM  `user`";
    $pdo->prepare($sql)->execute();

    $sql = "INSERT INTO  `user` (`name`, `value`) values ('$name', '$value')";
    $pdo->prepare($sql)->execute();

    foreach($pdo->query('SELECT * from `user`') as $row) {
        print_r($row);
    }
    $pdo = null;
}

function runRedisChecking()
{
    $redis = new Redis();
    $redis->connect('docker_nfs_redis', 6379);
    echo "Connection to server sucessfully";
    //check whether server is running or not
    echo "Server is running: " . $redis->ping();
}

