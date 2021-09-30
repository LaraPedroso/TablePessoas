<?php
    include_once 'serv.php';

    $id = $_GET['id']; 
    
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    $sql = "SELECT id FROM pessoas WHERE id = $id";
    $users = $pdo->query($sql);
    
    if($users){
        $delet_users = "DELETE FROM pessoas WHERE id = $id";
        $apagar = $pdo->prepare($delet_users);

        $apagar -> execute();
        
        echo "<p style = 'color: green'> EXCLUIDO COM SUCESSO </p>";
        $sec = '1';
        header("Refresh: $sec; url=pessoas.php");
    }
?>