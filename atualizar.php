<?php

require_once 'serv.php';


$nome = $_GET['nome'];
$id = $_GET['id'];
$idade = $_GET['idade'];
$cpf = $_GET['cpf'];
$cidade = $_GET['cidade'];

try {
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";

    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if($pdo){
      $stmt = $pdo->prepare('UPDATE pessoas SET nome = :nome, idade = :idade, cpf = :cpf, cidade = :cidade WHERE id = :id');
      $stmt->execute(array(
        ':id'   => $id,
        ':nome' => $nome,
        ':idade' => $idade,
        ':cpf' => $cpf,
        ':cidade' => $cidade
      ));
    }
    echo "<p style='color: green;'>Cadastro atualizado com sucesso!</p>";
    header("Refresh:2; url=pessoas.php");
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>