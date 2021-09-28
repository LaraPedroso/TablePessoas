<?php
    session_start();
    require_once 'serv.php';
    // require_once 'pessoas.php';

    // $inserir = filter_input(INPUT_POST, 'Inserir', FILTER_SANITIZE_STRING);

    try {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];
        $cidade = $_POST['cidade'];
        

        if($nome == null && $idade == null && $cpf == null || $cidade == null){
           
        } else {
            
            $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
            $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $query = $pdo->prepare("INSERT INTO pessoas (nome, idade, cpf, cidade) VALUES (:nome, :idade, :cpf, :cidade)");
            $query -> execute(array(
                'nome'  => $nome, 
                'idade' => $idade, 
                'cpf'   => $cpf,
                'cidade'=> $cidade));
                
                echo "<p style = 'color: green'> $nome CADASTRADO COM SUCESSO";
               
                $sec = '1';
                header("Refresh: $sec; url=pessoas.php");
            }
            


    } catch (PDOException $e) {
        die($e);
    } finally {
        if ($pdo) {
            $pdo = null;
        }
    }
    
?>
