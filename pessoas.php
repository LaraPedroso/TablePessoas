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
                <td class="table-dark">Id</td> 
                <td class="table-dark">Nome</td> 
                <td class="table-dark">Idade</td> 
                <td class="table-dark">CPF</td> 
                <td class="table-dark">Cidade</td> 
                <td class="table-dark col-sm-1">Faixa Etária</td> 
                <td class="table-dark col-sm-1">Editar</td>
            </tr>

<?php
    foreach($pessoas as $pessoa){
        echo"<tr>";
        echo"<td class='col-md-1'>$pessoa[id]</td>";
        echo"<td class='col-md-2' >".strtoupper($pessoa[nome])."</td>";
        echo"<td class='col-md-1'>$pessoa[idade]</td>";
        echo"<td <td class='col-md-2'>$pessoa[cpf]</td>";
        echo"<td <td class='col-md-2'>".strtoupper($pessoa[cidade])."</td>";
        
        if($pessoa['idade'] <= '12'){
            echo "<td>Criança</td>";
            
        }elseif($pessoa['idade'] >= '13' && $pessoa['idade'] <= '18'){
            echo "<td>Adolescente</td>";
            
        } else if($pessoa['idade']>= '18' && $pessoa['idade'] < '50'){ 
            echo "<td>Adulto</td>";

        } else {
            echo "<td>Idoso</td>";
        }

        echo "<td>
        
        <a class='text-dark' href='editar.php?id=$pessoa[id]'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
        </svg></a>


        <a class='text-dark' href='deletar.php?id=$pessoa[id]'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
            </svg></a> 
        </td>";

        echo"</tr>";
    }
?>
                <div class="container-md row align-items-center">
                    <form class="row g-4 d-block col" action="create.php" method="POST" >
                        <div class="col-md-2 ">
                            <label for="validationServer01">Nome:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer01"" name="nome">
                            
                        </div>
                
                        <div class="col-md-2 ">
                            <label for="validationServer02">Idade:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer02" name="idade">
                        </div>
                
                        <div class="col-md-2">
                            <label for="validationServer03">CPF:</label>
                            <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer03" name="cpf">
                        </div>

                        <div class="col-md-2 ">
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