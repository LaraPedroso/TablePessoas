<?php
    require_once 'serv.php';

    try {
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $pessoas = $pdo->query('SELECT * FROM pessoas');


    } catch (PDOException $e) {
        die($e);
    } finally {
        if ($pdo) {
            $pdo = null;
        }
    }

    ?>