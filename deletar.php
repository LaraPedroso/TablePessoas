<?php
    include_once 'serv.php';

    $id = $_GET['id']; 
    
    try{
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        $sql = "SELECT id FROM pessoas WHERE id = $id";
        $users = $pdo->query($sql);
        
        if($users){
            
            $delet_users = "DELETE FROM pessoas WHERE id = $id";
            $apagar = $pdo->prepare($delet_users);
            

        $apagar -> execute();
  
        die(json_encode(array('message' => "Excluido com sucesso!", 'code' => 200)));
    }
    
    } catch(PDOException $e) {
    
    
    die(json_encode(array('message' => $e->getMessage(), 'code' => 500)));

        }


        

?>
