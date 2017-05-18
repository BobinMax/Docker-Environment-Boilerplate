<?php
    // All of this code just for example
    require __DIR__ . '/vendor/autoload.php';

    use Predis\Client;

    $dsn = 'mysql:dbname=test;host=db';
    $user = 'root';
    $password = 'secret';

    try {
        $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    try {
        $stat = $pdo->query('SHOW DATABASES');
        $data = $stat->fetchAll(PDO::FETCH_ASSOC);
        var_dump($data);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $client = new Predis\Client('tcp://cache:6379');
    var_dump($client->set('foo', 'bar'));
    $value = $client->get('foo');
    var_dump($value);