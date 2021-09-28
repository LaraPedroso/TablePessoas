<?php
    require_once 'connect.php';
    require_once 'create.php'

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>PHP/HTML</h1>
        <table class="table table-bordered border-dark"> 
            <tr>
                <td class="table-dark">Nome</td> 
                <td class="table-dark">Idade</td> 
                <td class="table-dark">CPF</td> 
                <td class="table-dark">Cidade</td> 
                <td class="table-dark">Faixa Etária</td> 
            </tr>

<?php
    foreach($pessoas as $pessoa){
        echo"<tr>";
        echo"<td>".strtoupper($pessoa[nome])."</td>";
        echo"<td>$pessoa[idade]</td>";
        echo"<td>$pessoa[cpf]</td>";
        echo"<td>".strtoupper($pessoa[cidade])."</td>";
        
        if($pessoa['idade'] <= '12'){
            echo "<td>Criança</td>";
            
        }elseif($pessoa['idade'] >= '13' && $pessoa['idade'] <= '18'){
            echo "<td>Adolescente</td>";
            
        } else if($pessoa['idade']>= '18' && $pessoa['idade'] < '50'){ 
            echo "<td>Adulto</td>";

        } else {
            echo "<td>Idoso</td>";
        }
        echo"</tr>";
    }
?>
                <div class="container-md row align-items-center">
                    <form class="row g-4 d-block col" action="create.php" method="POST" >
                        <div class="col-md-4 ">
                            <label for="validationServer01">Nome:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer01"" name="nome">
                        </div>
                
                        <div class="col-md-4 ">
                            <label for="validationServer02">Idade:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer02" name="idade">
                        </div>
                
                        <div class="col-md-4">
                            <label for="validationServer03">CPF:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer03" name="cpf">
                        </div>

                        <div class="col-md-4 ">
                            <label for="validationServer04">Cidade:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer04"" name="cidade">
                        </div>
                
                        <div class="col-md-4">
                            <input class="btn btn-outline-dark border border-dark rounded-pill" type="submit" value="Inserir" name = "botao">
                        
                        </div>
                    </form>
                </div>
            <br>
        <table>
    </div>
</body>
</html>