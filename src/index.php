<?php
    $dsn = 'mysql:dbname=test;host=db';
    $user = 'root';
    $password = 'secret';

    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    $stat = $pdo->query('SELECT * FROM users');
    $data = $stat->fetchAll();
    var_dump($data);