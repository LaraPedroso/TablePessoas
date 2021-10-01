<?php

    include_once 'create.php';
    include_once 'serv.php';
        
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <div class="container-md">
            <form class="row g-4 d-block " action="create.php" method="POST" >
                <div class="col-md-2 ">
                    <label for="validationServer01">Nome:</label>
                    <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer01" name="nome">
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
                    <input type="text" class="rounded-pill form-control is-valid border border-dark" id="validationServer04" name="cidade">
                </div>

                <div class="col-md-4">
                    <input class="btn btn-outline-dark border border-dark rounded-pill" type="submit" value="Inserir" name = "botao">
                    <a href='pessoas.php' class='btn btn-outline-dark border border-dark rounded-pill'>Voltar</a>
                </div>
            </form>
        </div>