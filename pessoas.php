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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="container">
        <h1>PHP/HTML</h1>
        
        <table class="table table-bordered border-dark"> 
            <tr>
                <td class="table-dark text-center">Id</td> 
                <td class="table-dark text-center"">Nome</td> 
                <td class="table-dark text-center">Idade</td> 
                <td class="table-dark text-center">CPF</td> 
                <td class="table-dark text-center">Cidade</td> 
                <td class="table-dark text-center col-sm-1">Faixa Etária</td> 
                <td class="table-dark text-center col-sm-1">Editar</td>
            </tr>

<?php
    foreach($pessoas as $pessoa){
        echo"<tr id='linha-$pessoa[id]'>";
        echo"<td class='col-md-1 text-center'>$pessoa[id]</td>";
        echo"<td class='col-md-2 text-center'>".strtoupper($pessoa[nome])."</td>";
        echo"<td class='col-md-1' text-center'>$pessoa[idade]</td>";
        echo"<td <td class='col-md-2 text-center'>$pessoa[cpf]</td>";
        echo"<td <td class='col-md-2 text-center'>".strtoupper($pessoa[cidade])."</td>";
        
        if($pessoa['idade'] <= '12'){
            echo "<td class='text-center'>Criança</td>";
            
        }elseif($pessoa['idade'] >= '13' && $pessoa['idade'] <= '18'){
            echo "<td class='text-center'>Adolescente</td>";
            
        } else if($pessoa['idade']>= '18' && $pessoa['idade'] <= '50'){ 
            echo "<td class='text-center'>Adulto</td>";

        } else {
            echo "<td class='text-center'>Idoso</td>";
        }

        echo "<td>
        
        <a class='text-dark' href='editar.php?id=$pessoa[id]'> <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
        </svg></a>

        
        <a class='text-dark text-center' href='deletar.php?id=$pessoa[id]' onclick='confirmation(event,$pessoa[id])'> <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
        </svg></a> 
        </td>";
        
        echo"</tr>";
    }
    ?>
            <div style = 'margin-bottom: 15px'> 
                <a class='text-dark d-flex justify-content-end' href='inserir.php'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-plus-square' viewBox='0 0 16 16'>
                <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
                </svg> </a>
            </div>
        </table>
    </div>
<script>
      function confirmation(ev, id) {
        ev.preventDefault();

        Swal.fire({
          title: 'Realmente deseja excluir?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, excluir!'
        }).then((result) => {
          if (result.isConfirmed == true){
            $.ajax({
              url: 'deletar.php',
              type: 'GET',
              data: 'id=' + id,
            })
            .done(function(response) {
              resposta = JSON.parse(response);
                if (resposta["code"] == 200){
                  Swal.fire('Sucesso', resposta["message"], 'success')
                  $('#linha-'+id).fadeOut();

                }else{
                  Swal.fire('Oops...', resposta["message"], 'error')
                }
            })
            .fail(function() {
                Swal.fire('Oops...', 'Algo deu errado!', 'error')
            });
          }
        });
      }
    </script>
</body>
</html>