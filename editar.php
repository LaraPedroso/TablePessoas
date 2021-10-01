<?php
    include_once 'serv.php';
    

        $id = $_GET['id'];  
        $nome = $_GET['nome']; 
        $idade = $_GET['idade'];    
        $cpf = $_GET['cpf'];  
        $cidade = $_GET['cidade'];
    
        
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $sql = "SELECT * FROM pessoas WHERE id = :id";
        $stmt = $pdo->prepare($sql);
         if($stmt){
              $stmt->bindParam(":id", $id);
              if($stmt->execute()){
                  if($stmt->rowCount() == 1){
                      $row = $stmt->fetch(PDO::FETCH_ASSOC);
                      
                       $nome = $row['nome'];
                       $idade = $row['idade'];
                       $cpf = $row['cpf'];
                       $cidade = $row['cidade'];
                  } else{
                      echo("error");
                      exit();
                  }
              }
        
     
        }
        
        echo "<div class='container-md'>";
        echo " <form class='col-md-6' action='atualizar.php'>";
        echo " <div>";
        echo " <label for='validationServer01'>Nome:</label>";
        echo " <input type='hidden' name='id' value='$id'>";
        echo " <input type='text' class='rounded-pill form-control is-valid border border-dark' id='validationServer01' name='nome' value='$nome'>";     
        echo " <label for='validationServer02'>Idade:</label>";
        echo " <input type='text' class='rounded-pill form-control is-valid border border-dark' id='validationServer02' name='idade' value='$idade'>";
        echo " <label for='validationServer03'>CPF:</label>";
        echo " <input type='text' class='rounded-pill form-control is-valid border border-dark' id='validationServer03' name='cpf' value='$cpf'>";
        echo " <label for='validationServer04'>Cidade:</label>";
        echo " <input type='text' class='rounded-pill form-control is-valid border border-dark' id='validationServer04'' name='cidade' value='$cidade'>";
        echo " <input class='btn btn-outline-dark border border-dark rounded-pill' type='submit' value='Editar' name = 'botao'>";
        echo " <a href='pessoas.php' class='btn btn-outline-dark border border-dark rounded-pill'>Voltar</a>";
        echo " </div>";
        echo " </form>";

?>
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
       