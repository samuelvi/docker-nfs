<?php


try {
    $pdo = new PDO('mysql:host=docker_nfs_mariadb;dbname=nfs', 'nfs', 'nfs');

    $now = date('YmdHis');
    $name = 'user_' . $now;
    $value = $now;

    $sql = "INSERT INTO  `user` (`name`, `value`) values ('$name', '$value')";
   // die($sql);
    $pdo->prepare($sql)->execute();

    foreach($pdo->query('SELECT * from `user`') as $row) {

        print_r($row);
    }
    $pdo = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

phpinfo();
